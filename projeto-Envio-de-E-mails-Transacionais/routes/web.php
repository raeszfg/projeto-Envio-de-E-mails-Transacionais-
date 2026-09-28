<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


Route::get('/home-page', [MainController::class, 'homePage']); 
Route::get('/login', [MainController::class, 'login']); 
Route::get('/', [MainController::class, 'index']);
Route::get('/cadastro', [MainController::class, 'index'])->name('cadastro'); 