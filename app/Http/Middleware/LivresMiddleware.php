<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class LivresMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            // L'utilisateur est connecté, laissez-le accéder à la route demandée
            return $next($request);
        }

        // L'utilisateur n'est pas connecté, redirigez-le vers la page de connexion
        return redirect()->route('login')->with('error', 'Vous devez être connecté pour accéder à cette page.');
   }
}
