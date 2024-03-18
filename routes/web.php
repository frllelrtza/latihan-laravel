<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Muhammad Al-Farrel Elmaretza',
        'email' => 'alfarrelelmaretza@gmail.com',
        'image' => 'wave to earth.jpg',
    ]);
});

Route::get('/blog', function () {
    return view('posts');
});
