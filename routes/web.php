<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/privacy', function () {
    return view('legal.privacy');
})->name('privacy');

Route::get('/legal', function () {
    return view('legal.index');
})->name('legal');

Route::get('/faq', 'FaqController@index')->name('faq');
Route::get('/about/people', 'AboutController@index')->name('about');
