<?php

namespace App\Http\Middleware;

use Closure;

class Test
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
        echo "<br>printed by TestMiddleware <br>";
        return $next($request);
    }
}
