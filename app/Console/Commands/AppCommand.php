<?php

namespace App\Console\Commands;

use Illuminate\Database\Seeder;
use Schema;
use Sentinel;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;
use File;
use Carbon;
use Image;
use App\Models\User;
use App\Models\UserInfo;
use App\Models\Payment;

/**
 * Class AppCommand.
 *
 * @author Phillip Madsen <contact@affordableprogrammer.com>
 */
class AppCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'app:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '';

    /**
     * Holds the user information.
     *
     * @var array
     */
    protected $userData = array(
        'last_login' => null,
        'first_name' => null,
        'last_name' => null,
        'username' => null,
        'email' => null,
        'password' => null,
    );

    /**
     * Execute the console command.
     */
    public function handle()
    {

        \DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('articles');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('articles_tags');

        Schema::dropIfExists('form_posts');
        Schema::dropIfExists('groups');
        Schema::dropIfExists('migrations');
        Schema::dropIfExists('news');
        Schema::dropIfExists('pages');
        Schema::dropIfExists('photos');
        Schema::dropIfExists('photo_galleries');
        Schema::dropIfExists('settings');
        Schema::dropIfExists('sliders');

        Schema::dropIfExists('activations');
        Schema::dropIfExists('persistences');
        Schema::dropIfExists('reminders');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('role_users');
        Schema::dropIfExists('throttle');
        Schema::dropIfExists('users');
        Schema::dropIfExists('menus');
        Schema::dropIfExists('maillist');
        Schema::dropIfExists('faqs');

        Schema::dropIfExists('projects');
        Schema::dropIfExists('userinfo');
        Schema::dropIfExists('videos');
        Schema::dropIfExists('logs');
        Schema::dropIfExists('userinfo');

        Schema::dropIfExists('products');

        Schema::dropIfExists('categories');
        Schema::dropIfExists('category_product');
        Schema::dropIfExists('sub_categories');
        Schema::dropIfExists('sections');

        Schema::dropIfExists('product_features');
        Schema::dropIfExists('product_variants');
        Schema::dropIfExists('product_album');
        Schema::dropIfExists('option_values');
        Schema::dropIfExists('options');

        Schema::dropIfExists('paypal');
        Schema::dropIfExists('reviews');
        Schema::dropIfExists('seo');
        Schema::dropIfExists('coupons');
        Schema::dropIfExists('cart');
        Schema::dropIfExists('datalayer');

        Schema::dropIfExists('messages');
        Schema::dropIfExists('payment');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('order_product');
        \DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        $this->comment('=====================================');
        $this->comment('');
        $this->info('  Step: 1');
        $this->comment('');
        $this->info('    Please follow the following');
        $this->info('    instructions to create your');
        $this->info('    default user.');
        $this->comment('');
        $this->comment('-------------------------------------');
        $this->comment('');

        // Let's ask the user some questions, shall we?
//        $this->askUsername();
        $this->askUserFirstName();
        $this->askUserLastName();
        $this->askUserEmail();
        $this->askUserPassword();

        $this->comment('');
        $this->comment('');
        $this->comment('=====================================');
        $this->comment('');
        $this->info('  Step: 2');
        $this->comment('');
        $this->info('    Preparing your Application');
        $this->comment('');
        $this->comment('-------------------------------------');
        $this->comment('');

        // Generate the Application Encryption key
        $this->call('key:generate');

        // Create the migrations table
        $this->call('migrate:install');

        // Run the Migrations
        $this->call('migrate');

        // Create the default user and default groups.
        $this->sentinelRunner();

        // Seed the tables with dummy data
        $this->call('db:seed');
    }

    /**
     * Asks the user for the username.
     */
    protected function askUsername()
    {
        do {
            // Ask the user to input the first name
//            $username = $this->ask('Please enter your username: ');
            $username = "phillipmadsen";
            // Check if the username is valid
            if ($username == '') {
                // Return an error message
                $this->error('Your username is invalid. Please try again.');
            }

            // Store the user username
            $this->userData['username'] = $username;
            $this->info('    UserName is '. $username);
        } while (!$username);
    }

    /**
     * Asks the user for the first name.
     */
    protected function askUserFirstName()
    {
        do {
            // Ask the user to input the first name
            //$first_name = $this->ask('Please enter your first name: ');
            $first_name = "phillip";
            // Check if the first name is valid
            if ($first_name == '') {
                // Return an error message
                $this->error('Your first name is invalid. Please try again.');
            }

            // Store the user first name
            $this->userData['first_name'] = $first_name;
            $this->info('    First Name is '. $first_name);
        } while (!$first_name);
    }




    /**
     * Asks the user for the last name.
     */
    protected function askUserLastName()
    {
        do {
            // Ask the user to input the last name
           // $last_name = $this->ask('Please enter your last name: ');
            $last_name = 'madsen';

            // Check if the last name is valid.
            if ($last_name == '') {
                // Return an error message
                $this->error('Your last name is invalid. Please try again.');
            }

            // Store the user last name
            $this->userData['last_name'] = $last_name;
            $this->info('    Last Name is '. $last_name);
        } while (!$last_name);
    }

    /**
     * Asks the user for the user email address.
     */
    protected function askUserEmail()
    {
        do {
            // Ask the user to input the email address
          //  $email = $this->ask('Please enter your user email: ');
            $email = 'pmadsen2013@gmail.com';
            // Check if email is valid
            if ($email == '') {
                // Return an error message
                $this->error('Email is invalid. Please try again.');
            }

            // Store the email address
            $this->userData['email'] = $email;
            $this->info('    Email is '. $email);
        } while (!$email);
    }

    /**
     * Asks the user for the user password.
     */
    protected function askUserPassword()
    {
        do {
            // Ask the user to input the user password
         //   $password = $this->ask('Please enter your user password: ');
            $password = bcrypt('mad15696');
            // Check if email is valid
            if ($password == '') {
                // Return an error message
                $this->error('Password is invalid. Please try again.');
            }

            // Store the password
            $this->userData['password'] = $password;
            $this->info('    Password is saved');

        } while (!$password);
    }

    /**
     * Runs all the necessary Sentry commands.
     */
    protected function sentinelRunner()
    {
        // Create the default groups
        $this->sentinelCreateDefaultGroups();

        // Create the user
        $this->sentinelCreateUser();


        // Create dummy user
        $this->sentinelCreateDummyUser();
    }

    /**
     * Creates the default groups.
     */
    protected function sentinelCreateDefaultGroups()
    {
        // Create the admin group
        $this->role = Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'SuperAdmin',
            'slug' => 'superadmin',
        ]);

        // Show the success message.
        $this->comment('');
        $this->info('Admin group created successfully.');

    }

    /**
     * Create the user and associates the admin group to that user.
     */
    protected function sentinelCreateUser()
    {

        // Prepare the user data array.
        $data = array_merge($this->userData, [

            'activated' => 1,
            'isAdmin' => 1,
            'last_login' => new \DateTime(),
        ]);

        $user = Sentinel::registerAndActivate($data);

        $this->role->users()->attach($user);


        $user = User::find(1);

        $userinfo = UserInfo::create([
            "user_id" => $user->id,
            "photo" => "/content/admin/photos/profile.png"
        ]);



        Payment::create([
            'stripe_publishable_key' => '',
            'stripe_secret_key' => '',
            'paypal_client_id' => '',
            'paypal_secret' => ''
        ]);

        // Show the success message
        $this->comment('');
        $this->info('Your user was created successfully.');
    }

    /**
     * Create a dummy user.
     */
    protected function sentinelCreateDummyUser()
    {
        $user = Sentinel::registerAndActivate(array(

            'first_name' => 'Super',
            'last_name' => 'Admin',
            'email' => 'madsynn@gmail.com',
            'password' => bcrypt('madadmin'),
            'activated' => 1,
        ));

        $this->role->users()->attach($user);

        // Show the success message
        $this->comment('');
        $this->info('Admin user was created successfully.');
        $this->comment('');
    }
}
