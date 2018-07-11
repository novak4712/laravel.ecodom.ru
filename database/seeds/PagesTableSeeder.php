<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->delete();

        \App\Page::create(array(
            'name' => 'Главная',
            'link' => '/',
            'title' => 'ЭКОДОМ: Гибкий камень и термопанели',
            'description' => 'Гибкий камень и термопанели. Готовое решение для дизайна интерьера и внешней отделки фасадов.',
        ));

        \App\Page::create(array(
            'name' => 'Гибкий камень',
            'link' => 'kamen',
            'title' => 'ЭКОДОМ: Гибкий камень',
            'description' => 'Гибкий камень и термопанели. Готовое решение для дизайна интерьера и внешней отделки фасадов.',
        ));

        \App\Page::create(array(
            'name' => 'Термопанели',
            'link' => 'termopanel',
            'title' => 'ЭКОДОМ: Термопанели',
            'description' => 'Гибкий камень и термопанели. Готовое решение для дизайна интерьера и внешней отделки фасадов.',
        ));

        \App\Page::create(array(
            'name' => 'Фотогалерея',
            'link' => 'gallery',
            'title' => 'ЭКОДОМ: Фотогалерея - гибкий камень и термопанели',
            'description' => 'Гибкий камень и термопанели. Готовое решение для дизайна интерьера и внешней отделки фасадов.',
        ));

        \App\Page::create(array(
            'name' => 'Контакты',
            'link' => '#contact_footer',
            'title' => '',
            'description' => '',
        ));

        $this->command->info('pages finished');
    }
}
