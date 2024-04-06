<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');

})->name('about');

Route::get('/cabello', function () {
    return view('cabello');

})->name('cabello');

Route::get('/barba', function () {
    return view('barba');

})->name('barba');

Route::get('/cejas', function () {
    return view('cejas');

})->name('cejas');