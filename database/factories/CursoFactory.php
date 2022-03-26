<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    $title = $faker->paragraph(1);
    return [
        'uri' => str_slug($title),
        'title' => $title,
        'category' => $faker->paragraph(1),
        'Workload' => $faker->paragraph(1),
        'hours' => $faker->paragraph(1),
        'groups' => $faker->paragraph(1),
        'prerequisites' => $faker->paragraph(1),
        'description' => $faker->paragraph(20),
        'aboutCourse' => $faker->paragraph(20),


    ];
});
