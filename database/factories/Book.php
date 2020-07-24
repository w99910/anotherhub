<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\book;
use App\Author;
$factory->define(book::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'author_id'=>rand(1,10),
    ];
});
