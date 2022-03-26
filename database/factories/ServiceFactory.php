<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    $title = $faker->paragraph(1);
    return [
        'uri' => str_slug($title),
        'title' => $title,
        'category' => $faker->paragraph(1),
        'groups' => $faker->paragraph(1),
        'description' => $faker->paragraph(20),
    ];
});
