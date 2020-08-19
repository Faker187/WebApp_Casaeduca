<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AlumnoActivo
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
        $usuario = Auth::user();
        if ($usuario->tipo == 1 && $usuario->estado == 1) {
            return $next($request);
        }else{
            return redirect()->route('pagarPlan');
        }
        
    }
}
