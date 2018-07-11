<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdvantageTableSeeder::class);
        $this->call(FieldsTableSeeder::class);
        $this->call(FotosTableSeeder::class);
        $this->call(GkTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(ProfitTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(TpTableSeeder::class);
    }
}
