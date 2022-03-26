<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Extencao;
use Faker\Generator as Faker;

$factory->define(Extencao::class, function (Faker $faker) {
    $title = $faker->paragraph(1);
    return [
        'uri' => str_slug($title),
        'titleCourse' => $title,
        'courseDurationFirst' => $faker->paragraph(1),
        'courseDurationSecond' => $faker->paragraph(1),
        'investmentFirst' => $faker->paragraph(1),
        'investmentSecond' => $faker->paragraph(1),
        'workload' => $faker->paragraph(1),
        'workloadDate' => $faker->paragraph(1),
        'titleFirst' => $faker->paragraph(1),
        'titleSecond' => $faker->paragraph(1),
        'titlethird' => $faker->paragraph(1),
        'video' => $faker->paragraph(1),
        'a1First' => $faker->paragraph(1),
        'a1FirstHours' => $faker->paragraph(1),
        'totalFirst' => $faker->paragraph(1),
        'totalsecondHours' => $faker->paragraph(1),
        'detailsCourse' => $faker->paragraph(1),
    ];
});
