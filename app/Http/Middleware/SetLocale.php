<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('currency')){
            Session::put('currency','azn');
        }
        $locales = config('translatable.locales');
        if (!Session::has('locale')) {
            if (in_array($request->segment(1), $locales)) {
                Session::put('locale', $request->segment(1));
            } else {
                Session::put('locale', 'en');
            }
        }

        $segment = $request->segment(1);
        if (!in_array($segment, $locales)) {
            $segments = $request->segments();
            $fallback = Session::get('locale');
            $segments = Arr::prepend($segments, $fallback);
            return redirect()->to(implode('/', $segments));
        }

        app()->setLocale($segment);

        return $next($request);

    }
}
