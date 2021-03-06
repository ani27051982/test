<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role, ...$permission)
    {
        if(in_array("superadmin",$permission)){
            return $next($request);
        }
        throw new \Illuminate\Auth\Access\AuthorizationException;
    }
}
