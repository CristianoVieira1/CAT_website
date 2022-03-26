<?php

use App\Bacharelado;
use Illuminate\Database\Seeder;

class BachareladosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Bacharelado::class, 4)->create();
    }
}
