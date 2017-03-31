<?php

namespace App\Http\Middleware;

use Closure;

class Menu
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
        $m = new \Lavary\Menu\Menu;
        $m->make('MyNavBar', function($menu){
            $menu->add('Home');
            $menu->add('About',    'about');
            $menu->add('services', 'services');
            $menu->add('Contact',  'contact');

        });
        return $next($request);
    }
}
