<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

Route::get('/', function () {
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

Route::get('/kontak', function () {
    return view('homepage.kontak');
});

Route::resource('carts', CartController::class);
Route::get('/carts/create', [CartController::class, 'create'])->name('carts.create');
Route::post('/carts', [CartController::class, 'store'])->name('carts.store');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('homepage.about');
// });

// Route::get('/program', function () {
//     return view('homepage.program');
// });

// Route::get('/team', function () {
//     return view('homepage.team');
// });

// Route::get('/kontak/{name}', function ($name) {
//     return view('kontak', ['name' => $name]);
// });

// Route::redirect('/aboutus', '/about');

// Route::fallback(function () {
//     return view('errors.fallback');
// });
