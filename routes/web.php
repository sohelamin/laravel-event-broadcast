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

Route::get('/', function () {
    return view('welcome');
});

Route::get('broadcast', function () {
    $user = (object) [
        'name' => 'Sohel Amin',
        'email' => 'sohelamincse@gmail.com',
    ];

    event(new App\Events\UserRegisteredEvent($user));

    return 'Event has been fired!';
});

Route::get('listen', function () {
    return view('events');
});
