<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\SVGS;

$factory->define(SVGS::class, function (Faker $faker) {
    return [
        'img_url'=>"/assets/images/products/1/1 ().svg",
        'product_id'=>1
    ];
});
