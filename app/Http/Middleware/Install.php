<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;
class Install {
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
    public function handle($request, Closure $next)
    {
        $currentPath= Route::getFacadeRoot()->current()->uri();
        $currentPath= Route::getFacadeRoot()->current()->getPrefix();
        //dd($currentPath);
        if(\File::exists(base_path().'/config/installation.php')){
            if($currentPath == '/install'){
                dd('estp redireccionara a home');
                return redirect('home');
            }
            return $next($request);
        }else{
            if($currentPath != '/install'){
                return redirect('install');
            }
        }
        return $next($request);
    }
}
