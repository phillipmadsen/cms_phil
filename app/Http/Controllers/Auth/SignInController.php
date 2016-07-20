<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use Redirect;
use Reminder;
use Sentinel;
use Validator;
use App\User;


class SignInController extends Controller
{
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

}
