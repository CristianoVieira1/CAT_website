<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Educacao;
use Faker\Generator as Faker;

$factory->define(Educacao::class, function (Faker $faker) {
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
        'a1Second' => $faker->paragraph(1),
        'a1SecondHours' => $faker->paragraph(1),
        'a1Third' => $faker->paragraph(1),
        'a1ThirdHours' => $faker->paragraph(1),
        'a1Four' => $faker->paragraph(1),
        'a1FourHours' => $faker->paragraph(1),
        'a1Fifth' => $faker->paragraph(1),
        'a1FifthHours' => $faker->paragraph(1),
        'a1Sixth' => $faker->paragraph(1),
        'a1SixthHours' => $faker->paragraph(1),
        'a1Seventh' => $faker->paragraph(1),
        'a1SeventhHours' => $faker->paragraph(1),
        'totalFirst' => $faker->paragraph(1),
        'totalsecondHours' => $faker->paragraph(1),
    ];
});
