<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('pages.home');
});
Route::get('/index',function(){
    return view('pages.home1');
});