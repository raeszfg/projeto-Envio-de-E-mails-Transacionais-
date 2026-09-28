<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Middleware\IsNotLogged;
use App\Http\Middleware\IsLogged;

Route::middleware([IsLogged::class])->group(function () {
    Route::get('/', [MainController::class, 'index']); 
    Route::get('/cadastro', [MainController::class, 'index'])->name('cadastro'); 
    Route::post('/cadastro', [MainController::class, 'salvar'])->name('cadastro.salvar'); 
    Route::get('/login', [MainController::class, 'login'])->name('login'); 
    Route::post('/login', [MainController::class, 'autenticar'])->name('login.autenticar'); 
});

Route::get('/logout', [MainController::class, 'logout'])->name('logout');

Route::middleware([IsNotLogged::class])->group(function () {
    Route::get('/home-page', [MainController::class, 'homePage'])->name('home');
});