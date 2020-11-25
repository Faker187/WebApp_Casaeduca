<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class TipoAdministrador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $tipo = Auth::user()->tipo;
        
        if ($tipo == 0) {
            return $next($request);
        }else{
            return back();
        }

        
    }
}
