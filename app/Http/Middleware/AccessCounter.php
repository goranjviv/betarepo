<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class AccessCounter
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
        DB::statement('insert into accesses () values ()');
        return $next($request);
    }
}
