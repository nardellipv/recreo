<?php

namespace recreo\Http\Middleware;

use Closure;

class Enable
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
        $dateTest = date('Y-m-d');

        if ($dateTest <= '2018-02-08') {
            return redirect('home');
        }
        return $next($request);
    }
}
