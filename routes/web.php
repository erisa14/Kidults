<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\InteressiController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/no-card', function(){
    return view('without-card');
});
Route::get('/card', function(){
    return view('with-card');
});

Route::post('/register', [AuthController::class, 'store'])->name('register');




Route::get('/checkbox', [InteressiController::class, 'checkbox']);
Route::get('/checkbox-form',[InteressiController::class, 'checkbox_form']);
Route::get('/pg2-section', [InteressiController::class, 'pg2Section']);
Route::get('/page2', [InteressiController::class, 'pg2']);


Route::get('/dati', [InteressiController::class, 'dati']);
Route::get('/components.layouts.pg3-form', [InteressiController::class, 'pg3_form']);



Route::post('/login', [LoginController::class, 'processForm'])->name('login');
// Routes for displaying different pages
Route::get('/page2', [LoginController::class, 'showCardToysCenter'])->name('cardToysCenter');
Route::get('/dati', [LoginController::class, 'showDati'])->name('dati');