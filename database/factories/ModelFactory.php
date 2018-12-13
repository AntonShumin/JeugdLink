<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'first_name'        => $faker->firstName,
        'last_name'         => $faker->lastName,
        'email'             => $faker->safeEmail,
        'password'          => $password ?: $password = bcrypt('secret'),
        'remember_token'    => str_random(10),
    ];
});


$factory->define(App\Models\Thread::class, function($faker) {

    return [
        'user_id' => function() {
            return factory('App\Models\User')->create()->id;
        },
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
    ];

});

$factory->define(App\Models\Reply::class, function($faker) {

    return [
        'user_id' => function() {
            return factory('App\Models\User')->create()->id;
        },
        'thread_id' => function() {
            return factory('App\Models\Thread')->create()->id;
        },
        'body' => $faker->paragraph,
    ];

});

/*$threads->each(function ($thread) {
    factory('App\Models\Reply', 10)->create( [ 'thread_id' => $thread->id ] );
});*/