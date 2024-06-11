<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dati', function(){
    return view('dati');
});

Route::get('/no-card', function(){
    return view('without-card');
});
Route::get('/card', function(){
    return view('with-card');
});
Route::get('/page2', function(){
    return view('pg2');
});

Route::post('/register', [AuthController::class, 'store'])->name('register');
