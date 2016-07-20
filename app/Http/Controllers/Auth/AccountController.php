<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Mail;
use Redirect;
use Reminder;
use Sentinel;
use Validator;

/**
 * Class account Controller.
 *
 * @author Phillip Madsen <contact@affordableprogrammer.com>
 */
class AccountController extends Controller
{
    /**
     * Create a new authentication controller instance.
     */
    public function __construct()
    {
    }

    /**
     * Display the signin page.
     *
     * @return View
     */
    public function getSignin()
    {
        if (!Sentinel::check())
        {
            return view('frontend/auth/signin');
        }

        return Redirect::route('shop');
    }

    /**
     * Signin action.
     *
     * @param  Request $request
     * @return mixed
     */
    public function postSignin(Request $request)
    {
        $credentials = [
            'email'    => $request->get('email'),
            'password' => $request->get('password')
        ];

        $rememberMe = $request->get('rememberMe');

        try {
            if (!empty($rememberMe))
            {
                $result = Sentinel::authenticateAndRemember($credentials);
            }
            else
            {
                $result = Sentinel::authenticate($credentials);
            }

            if ($result)
            {
                return Redirect::route('shop');
            }
        }
        catch (\Cartalyst\Sentinel\Checkpoints\NotActivatedException $e)
        {
            return Redirect::back()->withErrors($e->getMessage());
        }

        flash()->error('Invalid signin or password!');

        return Redirect::back()->withInput();
    }

    /**
     * Logout action.
     *
     * @return Redirect
     */
    public function getLogout()
    {
        Sentinel::logout(Sentinel::getUser());

        return Redirect::route('signin');
    }

    public function getForgotPassword()
    {
        if (!Sentinel::check())
        {
            return view('frontend/auth/forgot-password');
        }

        return Redirect::route('dashboard');
    }

    /**
     * @param Request $request
     */
    public function postForgotPassword(Request $request)
    {
        $credentials = [
            'email' => $request->get('email')
        ];

        $rules = [
            'email' => 'required|email'
        ];

        $validation = Validator::make($credentials, $rules);

        if ($validation->fails())
        {
            return Redirect::back()->withErrors($validation)->withInput();
        }

        // Find the user using the user email address
        $this->user = Sentinel::findByCredentials($credentials);

        if (!$this->user)
        {
            flash()->error('E-mail address you entered is not found!');

            return Redirect::route('forgot.password');
        }

        $reminderData = Reminder::create($this->user);

        // Get the password reset code
        $resetCode = $reminderData->code;

        $formData = ['userId' => $this->user->id, 'resetCode' => $resetCode];

        try {
            Mail::send('emails.auth.reset-password', $formData, function ($message) use ($request)
            {
                $message->from('noreply@fully.com', 'Fully');
                $message->to($request->get('email'), 'Lorem Lipsum')->subject('Reset Password');
            });

            return Redirect::route('signin');
        }
        catch (Exception $ex)
        {
            return Redirect::route('forgot.password')->withErrors(['forgot-password' => 'Password reset failed']);
        }
        /*$mailer = new Mailer;
    $mailer->send('emails.auth.reset-password', 'user@fully.com', 'Reset Password', $formData);*/
    }

    /**
     * @param $id
     * @param $code
     */
    public function getResetPassword($id, $code)
    {
        // Find the user using the user id
        $this->user = Sentinel::findById($id);

        if ($reminder = Reminder::exists($this->user, $code))
        {
            flash()->success('Please enter your new password!');

            return view('frontend/auth/reset-password', compact('id', 'code'));
        }
        else
        {
            return Redirect::route('signin');
        }
    }

    /**
     * @param Request $request
     */
    public function postResetPassword(Request $request)
    {
        $formData = [
            'id'               => $request->get('id'),
            'code'             => $request->get('code'),
            'password'         => $request->get('password'),
            'confirm-password' => $request->get('confirm_password')
        ];

        $rules = [
            'id'               => 'required',
            'code'             => 'required',
            'password'         => 'required|min:4',
            'confirm-password' => 'required|same:password'
        ];

        $validation = Validator::make($formData, $rules);

        if ($validation->fails())
        {
            return Redirect::back()->withErrors($validation)->withInput();
        }

        // Find the user using the user id
        $this->user = Sentinel::findById($formData['id']);

        if ($reminder = Reminder::complete($this->user, $formData['code'], $formData['password']))
        {
            // Password reset passed
            return Redirect::route('signin');
        }
        else
        {
            // Password reset failed
            return Redirect::route('reset.password')->withErrors(['forgot-password' => 'Password reset failed']);
        }
    }
}
