<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeding.
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \DB::table('settings')->truncate();
        \DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        $settings = array(
            'settings' => '{"site_title":"Fully CMS - Laravel 5 Multi Language Content Managment System","ga_code":"UA-61740707-1","meta_keywords":"Laravel 5 Multi Language Content Managment System","meta_description":"Laravel 5 Multi Language Content Managment System"}',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'lang' => 'tr', );

        \DB::table('settings')->insert($settings);
    }
}
