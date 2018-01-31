<?php

namespace recreo\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use recreo\School;

class Profile
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
        $schoolProfile = School::where('schools.id', '=', Auth::user()->school_id)
            ->first();

        if ($schoolProfile->active == 0) {
            Session::flash('messageUpdate', '¡Antes de continuar! Por favor antes de continuar complete los datos del colegio.');
            return redirect('school');
        }
        return $next($request);
    }
}
