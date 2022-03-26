<?php

use App\Educacao;
use Illuminate\Database\Seeder;

class EducacaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Educacao::class, 38)->create();
    }
}
