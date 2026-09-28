<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsNotLogged
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!session()->has('usuario_id')) {
            return redirect()->route('login')->withErrors(['email' => 'Você precisa fazer login para acessar esta página.']);
        }
        return $next($request);
    }
}