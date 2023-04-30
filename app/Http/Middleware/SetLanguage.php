<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $availableLanguages = ['en', 'it', 'es'];
        $requestedLanguage = $request->segment(1);

        if (in_array($requestedLanguage, $availableLanguages)) {
            app()->setLocale($requestedLanguage);
        } else {
            return redirect('/en');
        }

        if ($requestedLanguage === 'en' && !empty($request->segment(2))) {
            return redirect('/');
        }

        return $next($request);
    }
}
