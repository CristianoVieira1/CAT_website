<?php

use Illuminate\Database\Seeder;

class TecnologiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Tecnologia::class, 10)->create();
    }
}
