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
    return view('main', ['title' => 'Главная', 'content' => 'В разработке']);
})->name('home');

Route::get('/works', function () {
    return view('works', ['title' => 'Работы', 'content' => 'В разработке']);
})->name('works');

Route::get('/profile', function () {
    return view('profile', ['title' => 'Профиль', 'content' => 'В разработке']);
})->name('profile');

Route::get('/contact', function () {
    return view('contact', ['title' => 'Контакты', 'content' => 'В разработке']);
})->name('contact');


