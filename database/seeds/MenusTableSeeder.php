<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MenusTableSeeder extends Seeder {

    /**
     * Run the database seeding.
     *
     * @return void
     */
    public function run() {

        \DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \DB::table('menus')->truncate();
        \DB::statement('SET FOREIGN_KEY_CHECKS = 1');


        \DB::table('menus')->insert(array(

            array(
                'title'        => 'Home',
                'icon_class'   => Null,
                'url'          => '/',
                'order'        => 10,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'home',
                'is_published' => false,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'Sewing Machines',
                'icon_class'   => Null,
                'url'          => '/en/sewing-machines/qnique',
                'order'        => 11,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'news',
                'is_published' => true,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'Hand Quilting',
                'icon_class'   => Null,
                'url'          => '/en/hand-quilting/',
                'order'        => 12,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'news',
                'is_published' => true,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'Machine Frames',
                'icon_class'   => Null,
                'url'          => '/en/machine-frames/',
                'order'        => 13,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'news',
                'is_published' => true,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
                        array(
                'title'        => 'Automation',
                'icon_class'   => Null,
                'url'          => '/en/automation/qct',
                'order'        => 14,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'news',
                'is_published' => true,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'TrueCut',
                'icon_class'   => Null,
                'url'          => '/en/truecut/',
                'order'        => 15,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'news',
                'is_published' => true,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'Community',
                'icon_class'   => Null,
                'url'          => '/en/community/',
                'order'        => 16,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'news',
                'is_published' => true,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'Blog',
                'icon_class'   => Null,
                'url'          => '/en/community/blog',
                'order'        => 18,
                'parent_id'    => 7,
                'type'         => 'module',
                'option'       => 'blog',
                'is_published' => true,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'News',
                'icon_class'   => Null,
                'url'          => '/en/community/news',
                'order'        =>  17,
                'parent_id'    => 7,
                'type'         => 'module',
                'option'       => 'news',
                'is_published' => false,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'Videos',
                'icon_class'   => Null,
                'url'          => '/en/community/video',
                'order'        => 19,
                'parent_id'    => 7,
                'type'         => 'module',
                'option'       => 'video',
                'is_published' => false,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'Faq',
                'icon_class'   => Null,
                'url'          => '/en/community/faq',
                'order'        => 20,
                'parent_id'    => 7,
                'type'         => 'module',
                'option'       => 'faq',
                'is_published' => false,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
            array(
                'title'        => 'Contact Us',
                'icon_class'   => Null,
                'url'          => '/en/contact',
                'order'        => 21,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'contact',
                'is_published' => true,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            ),
             array(
                'title'        => 'Shop',
                'icon_class'   => Null,
                'url'          => '/en/shop',
                'order'        => 21,
                'parent_id'    => 0,
                'type'         => 'module',
                'option'       => 'shop',
                'is_published' => true,
                'lang'         => 'en',
                'created_at'   => new Datetime,
                'updated_at'   => new Datetime
            )
        ));
    }
}
