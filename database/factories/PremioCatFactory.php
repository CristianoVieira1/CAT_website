<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\PremioCat;
use Faker\Generator as Faker;

$factory->define(PremioCat::class, function (Faker $faker) {
    $title = $faker->paragraph(1);
    return [
        'uri' => str_slug($title),
        'title' => $title,
        'category' => $faker->paragraph(1),
        'about' => $faker->paragraph(1),

    ];
});
