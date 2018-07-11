<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gk')->delete();

        \App\Gk::create(array(
            'image' => 'gk_1.png',
            'name' => 'Гибкий камень №1',
            'description' => '<p>Ширина: 0,55 м<br />
                                Длина: 0,95 м<br />
                                Толщина: 1,5-2 мм<br />',
            'price' => '999',
            'units' => '<p>за м<sup><small>2</small></sup></p>',
        ));

        \App\Gk::create(array(
            'image' => 'gk_2.png',
            'name' => 'Гибкий камень №2',
            'description' => '<p>Ширина: 0,55 м<br />
                                Длина: 0,95 м<br />
                                Толщина: 1,5-2 мм<br />',
            'price' => '999',
            'units' => '<p>за м<sup><small>2</small></sup></p>',
        ));

        \App\Gk::create(array(
            'image' => 'gk_3.png',
            'name' => 'Гибкий камень №3',
            'description' => '<p>Ширина: 0,55 м<br />
                                Длина: 0,95 м<br />
                                Толщина: 1,5-2 мм<br />',
            'price' => '999',
            'units' => '<p>за м<sup><small>2</small></sup></p>',
        ));

        \App\Gk::create(array(
            'image' => 'gk_4.png',
            'name' => 'Гибкий камень №4',
            'description' => '<p>Ширина: 0,55 м<br />
                                Длина: 0,95 м<br />
                                Толщина: 1,5-2 мм<br />',
            'price' => '999',
            'units' => '<p>за м<sup><small>2</small></sup></p>',
        ));

        \App\Gk::create(array(
            'image' => 'gk_5.png',
            'name' => 'Гибкий камень №5',
            'description' => '<p>Ширина: 0,55 м<br />
                                Длина: 0,95 м<br />
                                Толщина: 1,5-2 мм<br />',
            'price' => '999',
            'units' => '<p>за м<sup><small>2</small></sup></p>',
        ));

        \App\Gk::create(array(
            'image' => 'gk_6.png',
            'name' => 'Гибкий камень №6',
            'description' => '<p>Ширина: 0,55 м<br />
                                Длина: 0,95 м<br />
                                Толщина: 1,5-2 мм<br />',
            'price' => '999',
            'units' => '<p>за м<sup><small>2</small></sup></p>',
        ));

        \App\Gk::create(array(
            'image' => 'gk_7.png',
            'name' => 'Гибкий камень №7',
            'description' => '<p>Ширина: 0,55 м<br />
                                Длина: 0,95 м<br />
                                Толщина: 1,5-2 мм<br />',
            'price' => '999',
            'units' => '<p>за м<sup><small>2</small></sup></p>',
        ));

        \App\Gk::create(array(
            'image' => 'gk_8.png',
            'name' => 'Гибкий камень №8',
            'description' => '<p>Ширина: 0,55 м<br />
                                Длина: 0,95 м<br />
                                Толщина: 1,5-2 мм<br />',
            'price' => '999',
            'units' => '<p>за м<sup><small>2</small></sup></p>',
        ));

        \App\Gk::create(array(
            'image' => 'gk_9.png',
            'name' => 'Гибкий камень №9',
            'description' => '<p>Ширина: 0,55 м<br />
                                Длина: 0,95 м<br />
                                Толщина: 1,5-2 мм<br />',
            'price' => '999',
            'units' => '<p>за м<sup><small>2</small></sup></p>',
        ));

        \App\Gk::create(array(
            'image' => 'gk_10.png',
            'name' => 'Гибкий камень №10',
            'description' => '<p>Ширина: 0,55 м<br />
                                Длина: 0,95 м<br />
                                Толщина: 1,5-2 мм<br />',
            'price' => '999',
            'units' => '<p>за м<sup><small>2</small></sup></p>',
        ));

        $this->command->info('gk finished');
    }
}
