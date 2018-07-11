<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TpTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tp')->delete();

        \App\Tp::create(array(
            'image' => 'tp_1.png',
            'name' => 'Термопанель №1',
            'description' => 'Ширина: 0,55 м</br> Длина: 0,95 м</br>Толщина мраморного слоя: 1,5-2 мм</br>Утеплитель: 25мм</br>',
            'price' => '1499',
            'units' => '<p>за м<sup>2</sup></p>',
        ));

        \App\Tp::create(array(
            'image' => 'tp_2.png',
            'name' => 'Термопанель №2',
            'description' => 'Ширина: 0,55 м</br> Длина: 0,95 м</br>Толщина мраморного слоя: 1,5-2 мм</br>Утеплитель: 25мм</br>',
            'price' => '1499',
            'units' => '<p>за м<sup>2</sup></p>',
        ));

        \App\Tp::create(array(
            'image' => 'tp_3.png',
            'name' => 'Термопанель №3',
            'description' => 'Ширина: 0,55 м</br> Длина: 0,95 м</br>Толщина мраморного слоя: 1,5-2 мм</br>Утеплитель: 25мм</br>',
            'price' => '1499',
            'units' => '<p>за м<sup>2</sup></p>',
        ));

        \App\Tp::create(array(
            'image' => 'tp_4.png',
            'name' => 'Термопанель №4',
            'description' => 'Ширина: 0,55 м</br> Длина: 0,95 м</br>Толщина мраморного слоя: 1,5-2 мм</br>Утеплитель: 25мм</br>',
            'price' => '1499',
            'units' => '<p>за м<sup>2</sup></p>',
        ));

        \App\Tp::create(array(
            'image' => 'tp_5.png',
            'name' => 'Термопанель №5',
            'description' => 'Ширина: 0,55 м</br> Длина: 0,95 м</br>Толщина мраморного слоя: 1,5-2 мм</br>Утеплитель: 25мм</br>',
            'price' => '1499',
            'units' => '<p>за м<sup>2</sup></p>',
        ));

        \App\Tp::create(array(
            'image' => 'tp_6.png',
            'name' => 'Термопанель №6',
            'description' => 'Ширина: 0,55 м</br> Длина: 0,95 м</br>Толщина мраморного слоя: 1,5-2 мм</br>Утеплитель: 25мм</br>',
            'price' => '1499',
            'units' => '<p>за м<sup>2</sup></p>',
        ));

        \App\Tp::create(array(
            'image' => 'tp_7.png',
            'name' => 'Термопанель №7',
            'description' => 'Ширина: 0,55 м</br> Длина: 0,95 м</br>Толщина мраморного слоя: 1,5-2 мм</br>Утеплитель: 25мм</br>',
            'price' => '1499',
            'units' => '<p>за м<sup>2</sup></p>',
        ));

        \App\Tp::create(array(
            'image' => 'tp_8.png',
            'name' => 'Термопанель №8',
            'description' => 'Ширина: 0,55 м</br> Длина: 0,95 м</br>Толщина мраморного слоя: 1,5-2 мм</br>Утеплитель: 25мм</br>',
            'price' => '1499',
            'units' => '<p>за м<sup>2</sup></p>',
        ));

        \App\Tp::create(array(
            'image' => 'tp_9.png',
            'name' => 'Термопанель №9',
            'description' => 'Ширина: 0,55 м</br> Длина: 0,95 м</br>Толщина мраморного слоя: 1,5-2 мм</br>Утеплитель: 25мм</br>',
            'price' => '1499',
            'units' => '<p>за м<sup>2</sup></p>',
        ));

        \App\Tp::create(array(
            'image' => 'tp_10.png',
            'name' => 'Термопанель №10',
            'description' => 'Ширина: 0,55 м</br> Длина: 0,95 м</br>Толщина мраморного слоя: 1,5-2 мм</br>Утеплитель: 25мм</br>',
            'price' => '1499',
            'units' => '<p>за м<sup>2</sup></p>',
        ));

        $this->command->info('tp finished');
    }
}
