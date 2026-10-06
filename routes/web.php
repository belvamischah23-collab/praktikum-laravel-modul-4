<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/home', function () {
    return 'selamat pagi dunia, 707082400061 - Belva Mischah Callula';
});