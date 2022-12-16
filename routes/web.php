<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $comics = config('db.comics');

    return view('welcome', ['comics' => $comics]);
})->name('home');

// Route::get('/partials/header', function () {
//     $menu_links = config('db.menu');

//     return view('header', ['menu_links' => $menu_links]);
// })->name('header');
