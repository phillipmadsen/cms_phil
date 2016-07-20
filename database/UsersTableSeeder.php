<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->truncate();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'email' => 'pmadsen2013@gmail.com',
                'password' => '$2y$10$n9VuvK1uEkSKL.0pgMEIQOIMonoiRja.qUIHAr7fRxiTbh5VjHW7C',
                'permissions' => NULL,
                'last_login' => '2016-05-12 20:00:16',
                'first_name' => 'Phillip',
                'last_name' => 'Madsen',
                'created_at' => '2016-05-12 18:55:54',
                'updated_at' => '2016-05-12 20:00:16',
            ),
        ));


    }
}
