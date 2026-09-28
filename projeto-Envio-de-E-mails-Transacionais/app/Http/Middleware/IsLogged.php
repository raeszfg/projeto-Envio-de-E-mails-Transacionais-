<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsLogged
{
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('usuario_id')) {
            return redirect()->route('home');
        }
        return $next($request);
    }
}