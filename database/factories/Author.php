<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Author;
use App\book;


$factory->define(Author::class, function (Faker $faker) {
    return [
        'name' =>$faker->name,

    ];
});
$factory->define(book::class,function (Faker $faker){
return ['name'=>$faker->word,
         'author_id'=>Author::all()->random()->id];
});
