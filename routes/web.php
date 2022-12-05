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
    return view('backend.pages.dashboard');
})->name('home');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('backend.pages.dashboard');
})->name('dashboard');

Route::get('/formelement', function () {
    return view('backend.pages.formelement');
})->name('form');

Route::get('/listpage', function () {
    return view('backend.pages.listpage');
})->name('listpage');

Route::get('/gallery', function () {
    return view('backend.pages.gallery');
})->name('gallery');

Route::get('/viewpage', function () {
    return view('backend.pages.viewpage');
})->name('viewpage');
