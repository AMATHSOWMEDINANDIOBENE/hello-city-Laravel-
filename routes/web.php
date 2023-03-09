<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('pages/home');
})->name('home');
Route::get('/index',function(){
    return view('pages/home1');
})->name('home1');