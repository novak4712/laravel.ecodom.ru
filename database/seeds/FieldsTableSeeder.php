<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FieldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fields')->delete();

        \App\Field::create(array(
            'logo' => 'logo3.png',
            'email' => 'eco_dom_nv@mail.ru',
            'phone1' => '+7 (950) 526-83-52',
            'phone2' => '+7 (982) 577-39-83',
            'address' => 'г.Нижневартовск пос. Беловежский д.21',
            'description' => '<p>Напишите нам!<br />
                                Приглашаем к сотрудничеству!<br />
                                Оставьте свой телефон и мы обязательно с вами свяжемся!</p>',
        ));

        $this->command->info('fields finished');
    }
}
