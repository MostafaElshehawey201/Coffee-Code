<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetApiLocalLang
{
    public function handle(Request $request, Closure $next): Response
    {
        $lang = $request->header('accept-language');
        if($lang && in_array($lang , ['ar' , 'en'])){
            app()->setLocale($lang);
        }
        return $next($request);
    }
}
