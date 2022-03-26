<?php


use Illuminate\Database\Seeder;

class LicenciaturaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Licenciatura::class, 7)->create();
    }
}
