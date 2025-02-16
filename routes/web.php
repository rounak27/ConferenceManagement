<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('layout');
});
Route::get('/login', function () {
    return view('User.login');
});
Route::get('/register', function () {
    return view('User.register');
});
