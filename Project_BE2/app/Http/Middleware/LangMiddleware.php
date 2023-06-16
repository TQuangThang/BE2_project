<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;

class LangMiddleware
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
        $lang = $request->input('lang');
        if($lang){
            if(!array_key_exists($lang,config('app.locales'))){
                $lang = 'en';
            };
            $request->session()->put('lang', $lang);
            App::setLocale($lang);

        } else {
            $lang = $request->session()->get('lang');
            if(!array_key_exists($lang,config('app.locales'))){
                $request->session()->put('lang', $lang);
                $lang = 'en';
            };
            App::setLocale($lang);
        }
        View::share('lang',$lang);
        return $next($request);
    }
}