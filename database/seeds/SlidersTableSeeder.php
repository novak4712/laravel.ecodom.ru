<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->delete();

        \App\Slider::create(array(
            'image' => 'productslide1.jpg',
            'title' => 'Гибкий кирпич',
            'alt' => 'Гибкий кирпич',
        ));

        \App\Slider::create(array(
            'image' => 'productslide2.jpg',
            'title' => 'Гибкие обои',
            'alt' => 'Гибкие обои',
        ));

        \App\Slider::create(array(
            'image' => 'productslide3.jpg',
            'title' => 'Гибкий камень: Плитка',
            'alt' => 'Гибкий камень: Плитка',
        ));

        \App\Slider::create(array(
            'image' => 'productslide4.jpg',
            'title' => 'Гибкий камень: Текстурированный',
            'alt' => 'Гибкий камень: Текстурированный',
        ));

        \App\Slider::create(array(
            'image' => 'productslide5.jpg',
            'title' => 'Термопанели',
            'alt' => 'Термопанели',
        ));
        $this->command->info('sliders finished');
    }
}
