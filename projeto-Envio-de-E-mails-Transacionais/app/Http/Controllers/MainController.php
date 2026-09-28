<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function index()
    {
        return view('cadastro');
    }public function homePage()
    {
        return view('home_page');
    }
}