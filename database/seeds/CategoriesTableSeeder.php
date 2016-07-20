<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Run the database seeding.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS = 0');
 \DB::table('categories')->truncate();
        \DB::statement('SET FOREIGN_KEY_CHECKS = 1');

               \DB::table('categories')->insert(array(
            array(
                'title' => 'The Grace Company',
                'slug'  => Str::slug('the-grace-company'),
                'lang'  => 'en'),
            array(
                'title' => 'Hand Quilting',
                'slug'  => Str::slug('hand-quilting'),
                'lang'  => 'en'),
            array(
                'title' => 'Machine Quilting',
                'slug'  => Str::slug('machine-quilting'),
                'lang'  => 'en'),
            array(
                'title' => 'Quilting Machine',
                'slug'  => Str::slug('quilting-machine'),
                'lang'  => 'en'),
            array(
                'title' => 'Quilting Hoop',
                'slug'  => Str::slug('quilting-hoop'),
                'lang'  => 'en'),
            array(
                'title' => 'Lap Hoops',
                'slug'  => Str::slug('lap-hoops'),
                'lang'  => 'en'),
            array(
                'title' => 'Quilting Frames',
                'slug'  => Str::slug('quilting-frames'),
                'lang'  => 'en'),
            array(
                'title' => 'Qnique',
                'slug'  => Str::slug('qnique'),
                'lang'  => 'en'),
            array(
                'title' => 'Quilting Accessories',
                'slug'  => Str::slug('quilting-accessories'),
                'lang'  => 'en'),
            array(
                'title' => 'Machine Frame Accessories',
                'slug'  => Str::slug('machine-frame-accessories'),
                'lang'  => 'en'),
            array(
                'title' => 'Hand Frame Accessories',
                'slug'  => Str::slug('hand-frame-accessories'),
                'lang'  => 'en'),
            array(
                'title' => 'Hoop Accessories',
                'slug'  => Str::slug('hoop-accessories'),
                'lang'  => 'en')
               ));
    }
}
