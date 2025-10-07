<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('homepage.about');
});

Route::get('/program', function () {
    return view('homepage.program');
});

Route::get('/team', function () {
    return view('homepage.team');
});

Route::get('/kontak/{name}', function ($name) {
    return view('kontak', ['name' => $name]);
});

Route::redirect('/aboutus', '/about');

Route::fallback(function () {
    return view('errors.fallback');
});
