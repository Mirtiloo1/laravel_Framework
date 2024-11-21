<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckSession
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('usuario')) {
            return redirect('/login')->withErrors(['auth' => 'Você precisa estar logado para acessar esta página.']);
        }

        return $next($request);
    }
}

