<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fotos')->delete();

        \App\Foto::create(array(
            'image' => 'gal_max_1.jpg',
            'title' => 'image',
            'alt' => 'image',
        ));

        \App\Foto::create(array(
            'image' => 'gal_max_2.jpg',
            'title' => 'image',
            'alt' => 'image',
        ));

        \App\Foto::create(array(
            'image' => 'gal_max_3.jpg',
            'title' => 'image',
            'alt' => 'image',
        ));

        \App\Foto::create(array(
            'image' => 'gal_max_4.jpg',
            'title' => 'image',
            'alt' => 'image',
        ));

        \App\Foto::create(array(
            'image' => 'gal_max_5.jpg',
            'title' => 'image',
            'alt' => 'image',
        ));

        \App\Foto::create(array(
            'image' => 'gal_max_6.jpg',
            'title' => 'image',
            'alt' => 'image',
        ));

        \App\Foto::create(array(
            'image' => 'gal_max_7.jpg',
            'title' => 'image',
            'alt' => 'image',
        ));

        \App\Foto::create(array(
            'image' => 'gal_max_8.jpg',
            'title' => 'image',
            'alt' => 'image',
        ));

        \App\Foto::create(array(
            'image' => 'gal_max_9.jpg',
            'title' => 'image',
            'alt' => 'image',
        ));

        \App\Foto::create(array(
            'image' => 'gal_max_10.jpg',
            'title' => 'image',
            'alt' => 'image',
        ));

        \App\Foto::create(array(
            'image' => 'gal_max_11.jpg',
            'title' => 'image',
            'alt' => 'image',
        ));

        \App\Foto::create(array(
            'image' => 'gal_max_12.jpg',
            'title' => 'image',
            'alt' => 'image',
        ));

        \App\Foto::create(array(
            'image' => 'gal_max_13.jpg',
            'title' => 'image',
            'alt' => 'image',
        ));

        \App\Foto::create(array(
            'image' => 'gal_max_14.jpg',
            'title' => 'image',
            'alt' => 'image',
        ));

        \App\Foto::create(array(
            'image' => 'gal_max_15.jpg',
            'title' => 'image',
            'alt' => 'image',
        ));

        \App\Foto::create(array(
            'image' => 'gal_max_16.jpg',
            'title' => 'image',
            'alt' => 'image',
        ));

        $this->command->info('fotos finished');
    }
}
