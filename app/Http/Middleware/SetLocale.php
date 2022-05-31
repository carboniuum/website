<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;

class SetLocale
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
        $locale = $request->route('locale');

        // Check if the first segment matches a language code
        if (!array_key_exists($locale, Config::get('constants.locales'))) {
            // Store segments in array
            $segments = $request->segments();

            // Set the default language code as the first segment
            $fallback = config('app.fallback_locale');
            $segments[0] = $fallback;

            App::setLocale($fallback);

            // Redirect to the correct url
            return redirect()->to(implode('/', $segments));
        }

        if(array_key_exists($locale, Config::get('constants.locales'))) {
            App::setLocale($locale);
            $request->route()->forgetParameter('locale');
            URL::defaults(['locale' => $locale]);
        }

        return $next($request);
    }
}
