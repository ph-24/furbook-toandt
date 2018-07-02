<?php

namespace Furbook\Http\Middleware;

use Closure;
use Auth;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class IsAdministrator
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
        if (!Auth::user()->isAdministrator()){
            if ($request->ajax()){
                return response('Forbidden',403);
            }else{
                throw new AccessDeniedHttpException('Forbidden');
            }
        }
        return $next($request);
    }
}
