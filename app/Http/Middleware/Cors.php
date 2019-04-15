<?php

namespace App\Http\Middleware;
use Closure;

class Cors 
{
    public function handle($request, Closure $next)
    {
        if($request->isMethod('options')) {
            return response('', 200)
                ->header('Access-Control-Allow-Methods', 'POST, GET, PUT, DELETE')
                ->header("Access-Control-Allow-Headers", "Access-Control-Allow-Headers, x-xsrf-token, x-csrf-token, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers");
        }

        return $next($request);
    }
}