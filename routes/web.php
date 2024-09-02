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
    return view('content.welcome');
})->name('welcome');


Route::get('/dashboard', function () {
    return view('content.dashboard');
})->name('dashboard');

Route::get('/about', function () {
    return view('content.about');
})->name('about');

Route::get('/headerFooter', function () {
    return view('layout.headerFooter');
})->name('headerFooter');

Route::get('/posts', [PostController::class, 'index'])
->name('posts');
