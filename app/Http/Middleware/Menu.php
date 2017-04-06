<?php

namespace App\Http\Middleware;

use App\Post;
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
        $m->make('Menu_Admin', function($menu){
            $db = \App\Menu::where('group_name',$menu->name)->get();
            foreach ($db as $v){
                $menu->add($v->name,$v->link);
            }
        });
        return $next($request);
    }
}
