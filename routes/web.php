<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/faq', 'FaqController@index')->name('faq');

Route::get('/about/people', function () {
    return view('about.people');
})->name('about');
