<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/faq', function () {
    return view('faq/index');
});

Route::get('/about/people', function () {
    return view('about.people');
});
