<?php

use App\Extencao;
use Illuminate\Database\Seeder;

class ExtencaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Extencao::class, 6)->create();
    }
}
