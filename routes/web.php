<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::localizedGroup(function() {

    Auth::routes(['verify' => true]);


    Route::get('/', ['as' => 'welcome', 'uses' => function() {
        return view('welcome');

    }]);
    Route::get('/', 'ThreadController@index')->name('home');



    Route::group(['middleware' => 'verified'], function() {

    });

    Route::get('/profiel/{id}','ProfileController@show');



    Route::get('/threads','ThreadController@index');
    Route::get('/threads/{thread}','ThreadController@show');
    Route::post('/threads/{thread}/replies','ReplyController@store')->name('add_reply');

});


