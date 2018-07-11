<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProfitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profit')->delete();

        \App\Profit::create(array(
            'icon' => 'ico_pochemu_1.png',
            'text' => '<p>Мы - производители с большим стажем</p>',
        ));

        \App\Profit::create(array(
            'icon' => 'ico_pochemu_2.png',
            'text' => '<p>Более 1000 реализованных объектов</p>',
        ));

        \App\Profit::create(array(
            'icon' => 'ico_pochemu_3.png',
            'text' => '<p>Нам доверяют постоянные клиенты</p>',
        ));

        \App\Profit::create(array(
            'icon' => 'ico_pochemu_4.png',
            'text' => '<p>Мы выпускаем продукцию высшего качества</p>',
        ));

        $this->command->info('profit finished');
    }
}
