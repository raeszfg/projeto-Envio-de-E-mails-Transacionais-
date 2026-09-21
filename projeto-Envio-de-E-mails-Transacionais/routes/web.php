<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('cadastro');
});
Route::get('/login', [MainController::class, 'login']); 