<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if(auth()->guest() ){
            
            flash("Vous devez vous connecter pour voir cette page.Autre probleme ? Contactez l'administrateur")->error();
            
            return  redirect('/connexion');
        }
        
        return $next($request);
        
        
    }
}
