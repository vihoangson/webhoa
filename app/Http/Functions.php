<?php
/*
Description: This file use to container functions of developer that it support for this framework
Author : ngocluantdt@gmail.com
Date : 2016-10-11

*/


// make folder if it doesnt exist
function valid_folder($folder)
{

    $view_folder = explode('/', $folder);
    $folder = [];
    foreach ($view_folder as $folder_name) {
        if (!$folder_name) {
            continue;
        }
        $folder[] = $folder_name;
        $folder_path = implode('/', $folder);
        if (!is_dir($folder_path)) {
            mkdir($folder_path);
        }
    }

}

function create_file($path, $file_name = '')
{
    if (!is_dir($path)) {
        valid_folder($path);

    }
    $full_path = $path . '/' . $file_name;
    if (!file_exists($full_path)) {
        $myfile = fopen($full_path, "w") or die("Unable to open file!");
        $txt = "this is " . $file_name;
        fwrite($myfile, $txt);
        fclose($myfile);
    }
}

function create_view_file($view_name)
{
    $content_path = '../app/Views/';
    $view_path = $content_path . str_replace('.', '/', $view_name) . '.blade.php';
    // make view file if dont exit
    if (!file_exists($view_path)) {
        $view_folder = explode('.', $view_name);
        $file_name = array_pop($view_folder);
        $view_folder = $content_path . implode('/', $view_folder);
        create_frontend_file($view_folder, $file_name . '.blade.php');
    }

    return $view_name;
}

function create_frontend_file($path, $file_name = '')
{
    if (!is_dir($path)) {
        valid_folder($path);

    }
    $full_path = $path . '/' . $file_name;
    if (!file_exists($full_path)) {
        $myfile = fopen($full_path, "w") or die("Unable to open file!");
        $txt = " @include('frontend.includes.header') \n";
        $txt .= "<section> <h1>this is  : " . $file_name . "</h1></section> \n";
        $txt .= " @include('frontend.includes.footer')";

        fwrite($myfile, $txt);
        fclose($myfile);
    }
}


function valid_route_name()
{
    $action = Route::currentRouteAction(); //return current route action
    $name = Route::currentRouteName();

    $parse_name = str_replace('App\Http\Controllers\\', '', $action);
    $parse_name = str_replace('Controller@', '\\', $parse_name);
    $parse_name = strtolower($parse_name);
    $parse_name = str_replace('\\', '.', $parse_name);
    $parse_name = str_replace('.index', '', $parse_name);

    if ($parse_name != $name) {
        exit('Route name invalid');
    }
}


function get_image_loading()
{
    return '<img src="' . url('/') . '/upload/image_default/icon-loading.gif"/>';
}

function get_image_logo()
{
    return '<img src="' . url('/') . '/images/logo.png"/>';
}

function status_user($code, $type = "icon")
{
    $status = [0 => 'Lock', 2 => 'Pending', 1 => 'Publish'];
    $icon = [0 => 'lock text-danger', 2 => 'hourglass-1 text-warning', 1 => 'check-square text-success'];
    if ($type == 'icon') {
        if (isset($icon[$code])) {
            return '<i class="fa fa-' . $icon[$code] . '"></i>';
        }
        return;
    }
    if ($type == 'name') {
        if (isset($icon[$code])) {
            return $status[$code];
        }
        return;
    }
    if ($type == 'array') {

        return $status;
    }
}

function status_article($code, $type = "icon")
{
    $status = [0 => 'hidden', 2 => 'private', 1 => 'publish'];
    $icon = [0 => 'minus-square text-danger', 2 => 'lock text-warning', 1 => 'check-square text-success'];
    if ($type == 'icon') {
        if (isset($icon[$code])) {
            return '<i class="fa fa-' . $icon[$code] . '"></i>';
        }
        return;
    }
    if ($type == 'name') {
        if (isset($status[$code])) {
            return $status[$code];
        }
        return;
    }
    if ($type == 'array') {

        return $status;
    }
}

function status_mail($code, $type = "icon")
{
    $status = [0 => 'unread', 1 => 'readed'];
    if (isset($status[$code])) {
        return $status[$code];
    }
    return;
}

function status_default($code, $type = "icon")
{
    $status = [0 => 'hidden', 1 => 'publish'];
    $icon = [0 => 'minus-square text-danger', 1 => 'check-square text-success'];
    if ($type == 'icon') {
        if (isset($icon[$code])) {
            return '<i class="fa fa-' . $icon[$code] . '"></i>';
        }
        return;
    }
    if ($type == 'name') {
        if (isset($icon[$code])) {
            return $status[$code];
        }
        return;
    }
    if ($type == 'array') {

        return $status;
    }
}

function status_featured($code, $type = "icon")
{
    $status = [0 => 'unfeatured', 1 => 'featured'];
    $icon = [0 => 'minus-square text-danger', 1 => 'check-square text-success'];
    if ($type == 'icon') {
        if($code==0){
            return;
        }
        if (isset($icon[$code])) {
            return '<i class="fa fa-' . $icon[$code] . '"></i>';
        }
        return;
    }
    if ($type == 'name') {
        if (isset($icon[$code])) {
            return $status[$code];
        }
        return;
    }
    if ($type == 'array') {

        return $status;
    }
}


function get_id_locale($code = '')
{
    $locales = config('app.locales');
    if (!$code) {
        $code = App::getLocale();
    }
    foreach ($locales as $k => $item) {
        if ($item == $code) {
            return $k;
        }
    }
    return;
}

function message()
{
    if (session('message')) {
        $session = session('message');
        Session::forget('message');

        echo '<p class="alert alert-' . $session['type'] . ' alert-dismissable message">' . $session['message'] . '<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></p>';
    }
}

function set_flash_message($message, $type = "info")
{
    session()->put('message', ['type' => $type, 'message' => $message]);
}


function theme_path($param = '')
{
    $route = 'web';
    if (Request::is('admin/*')) {
        $route = 'admin';
    }

    $theme_path = $route . '.' . get_setting('system_theme_' . $route, 'default') . '.' . $param;
    return $theme_path;
}


function get_route_name($action = '', $action_name = '')
{


    if (!$action_name && class_exists('Route')) {
        $action_name = Route::currentRouteAction();
    }

    $action_name = str_replace('App\Http\Controllers\\', '', $action_name);
    $action_name = substr($action_name, 0, strpos($action_name, 'Controller@'));
    $action_name = strtolower(str_replace('\\', '.', $action_name));

    if ($action) {
        $action_name .= '.' . $action;
    }

    return $action_name;
}

function get_current_route_name()
{
    return Route::currentRouteName();
}

function get_no_image_url()
{
    return url('/') . '/upload/image_default/no-image.jpg';
}

function get_image_url($image, $thumb = false)
{
    if (strpos($image, 'http://') !== false || strpos($image, 'https://') !== false) {
        return $image;
    }
    if ($thumb && $image && file_exists('upload/thumbs/' . $image)) {
        return url('') . '/upload/thumbs/' . $image;
    }
    if ($image && file_exists('upload/images/' . $image)) {
        return url('') . '/upload/images/' . $image;
    }
    return url('/') . '/upload/image_default/no-image.jpg';
}


/**
 * @param $setting_key
 * @param string $default_value
 * @return string
 */
function get_setting($setting_key, $default_value = '')
{
    $setting_value='';
    if (!App::environment('dev')) {

        $setting_value = Cache::remember($setting_key, 1000, function () use ($setting_key) {

            $object = App\Models\Setting::where('setting_key', $setting_key)->first();

            if ($object) {
                return $object->setting_value;
            }
            return;
        });

    } else {
        $object = App\Models\Setting::where('setting_key', $setting_key)->first();
        if ($object) {
            $setting_value = $object->setting_value;
        }
    }

    if (!$setting_value) {
        return $default_value;
    } else {
        return $setting_value;
    }

}

function lang($key, $lang_default = '', $group_id = '')
{

    if (App::environment('dev')) {

        if (!$group_id) {
            if (Request::is('admin/*')) {
                $group_id = 2;
            } else {
                $group_id = 1;
            }
        }

        $fallback_locale = config('app.fallback_locale');

        $lang = App\Models\Language::where('lang_key', $key)->count();
        if (!$lang) {

            $insert['language_group_id'] = $group_id;
            $insert['lang_key'] = $key;

            if ($lang_default) {
                if ($fallback_locale) {
                    $insert['lang_' . $fallback_locale] = $lang_default;
                }
            }
            App\Models\Language::create($insert);
        }
    }
    else{
        ///pending
    }

    return trans('lang.' . $key);
}

function get_name_category_type($id)
{
    $types = config('app.category_type');
    if (isset($types[$id])) {
        return $types[$id];
    }
    return 'not found name category type';
}

function add_log($type = '', $data = '')
{
    if (!$data) {
        $data = Request::server('HTTP_USER_AGENT');
    }
    if (!$type) {
        $type = 'visit';
    }
    $user_id = 0;
    if (Auth::check()) {

        $user_id = Auth::User()->id;
    } else {
        if (session('user')) {
            $user_id = session('user')->id;
        }

    }


    $data = [
        'type' => $type,
        'data' => $data,
        'url' => Request::fullurl(),
        'ip_address' => Request::ip(),
        'user_agent' => implode('|', user_agent()),
        'refer' => Request::server('HTTP_REFERER'),
        'user_id' => $user_id
    ];
    App\Models\Log::create($data);
}

function user_agent()
{

    $user_agent = Request::server('HTTP_USER_AGENT');
    $bname = 'Unknown';
    $platform = 'Unknown';

    //First get the platform?
    if (preg_match('/linux/i', $user_agent)) {
        $platform = 'linux';
    } elseif (preg_match('/macintosh|mac os x/i', $user_agent)) {
        $platform = 'mac';
    } elseif (preg_match('/windows|win32/i', $user_agent)) {
        $platform = 'windows';
    }


    $data['os'] = $platform;


    // Next get the name of the useragent yes seperately and for good reason
    if (preg_match('/MSIE/i', $user_agent) && !preg_match('/Opera/i', $user_agent)) {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    } elseif (preg_match('/Firefox/i', $user_agent)) {
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
    } elseif (preg_match('/Chrome/i', $user_agent)) {
        $bname = 'Google Chrome';
        $ub = "Chrome";
    } elseif (preg_match('/Safari/i', $user_agent)) {
        $bname = 'Apple Safari';
        $ub = "Safari";
    } elseif (preg_match('/Opera/i', $user_agent)) {
        $bname = 'Opera';
        $ub = "Opera";
    } elseif (preg_match('/Netscape/i', $user_agent)) {
        $bname = 'Netscape';
        $ub = "Netscape";
    }


    $data['browser'] = $bname;
    return $data;
}

function admin_hidden_menu($item_menu)
{

    if (Auth::user()->id == 1) {
        return '';
    }
    $permission = [];
    if (isset(Request::user()->group->permission)) {
        $permission = json_decode(Request::user()->group->permission, true);
    }
    if(!$permission){
        return 'hidden';
    }
    return !in_array($item_menu['route'], $permission) ? 'hidden' : '';
}

function admin_active_menu($item_menu)
{
    $current_route_name = get_current_route_name();
    if ($item_menu['route'] == $current_route_name) {
        $params_current = json_encode(Route::current()->parameters());
        $params_item = isset($item_menu['params']) ? $item_menu['params'] : [];
        $params_item = json_encode($params_item);
        if ($params_current == $params_item) {
            return 'active';
        }

    }
    return '';
}

function admin_build_menu_url($item_menu)
{
    if (isset($item_menu['params']) && $item_menu['params']) {
        return route($item_menu['route'], $item_menu['params']);
    } else {
        return route($item_menu['route']);
    }
}


function get_name_group_language($group_id)
{
    $language_groups = config('app.language_groups');
    if (isset($language_groups[$group_id])) {
        return $language_groups[$group_id];
    }
    return 'Not found group';
}

function get_menu($position,$lang_id)
{
    $list = [];
    $menu = App\Models\Menu::where('position',$position)->first();
    if ($menu != null)
    {
        $listMenu = App\Models\MenuContent::where('menu_id',$menu->id)
                                          ->where('parent',0)
                                          ->where('language_id',$lang_id)
                                          ->get();

        if ($listMenu !=  null)
        {
            foreach ($listMenu as $mn)
            {
                $argv = [];
                $argv['id'] = $mn->id ;
                $argv['title'] = $mn->title;
                $argv['slug'] = $mn->slug;
                $argv['css'] = $mn->css;
                $argv['image'] = $mn->image;
                $argv['child'] = get_sub_menu($mn->id,$lang_id);
                $list[] = $argv;

            }
        }
    }

    return $list;


}
function get_sub_menu($id_menu_parent,$lang_id)
{
    $listSub = [];
    $listMenu = App\Models\MenuContent::where('parent',$id_menu_parent)->where('language_id',$lang_id)->get();

    if ($listMenu !=  null)
    {
        foreach ($listMenu as $mn)
        {
            $argv = [];
            $argv['id'] = $mn->id;
            $argv['title'] = $mn->title;
            $argv['slug'] = $mn->slug;
            $argv['css'] = $mn->css;
            $argv['image'] = $mn->image;
            $listSub[] = $argv;

        }
    }
    return $listSub;
}

function get_link_post($listPost)
{
    if ($listPost == '/' || $listPost == '' )
    {
        return url('/');
    }
    return url($listPost);
}

function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

function get_type_gallery_article($id)
{
    if ($id == 1)
    {
        return 'Toàn bộ';
    }
    if ($id == 2)
    {
        return 'Chính diện';
    }
    if ($id == 3)
    {
        return '45*';
    }
    if ($id == 4)
    {
        return 'Nằm nghiên';
    }
    return '';
}

function checkActiveMenu($inputLink)
{
    $current_path = \Illuminate\Support\Facades\Request::path();
    if($inputLink==$current_path){
        return 'active';
    }
    else{
        return '';
    }

    $current_route_name = get_current_route_name();
    $segments = \Illuminate\Support\Facades\Request::segments();
    $segment1 = \Illuminate\Support\Facades\Request::segment(1);

    if ($current_route_name == 'common.default.home' && route($current_route_name) == url($inputLink) )
    {
        return 'active';
    }

    if (count($segments) == 1)
    {
        if (url($segment1) == url($inputLink))
        {
            return 'active';
        }
    }
    if (url($segment1) == url($inputLink).'.html')
    {
        return 'active';
    }

    $article = App\Models\Article::join('article_language','article_language.article_id','=','article.id')
                                 ->where('article_language.slug',str_replace('.html','',$segment1))
                                 ->where('article_language.language_id',get_id_locale())
                                 ->first();
    if ($article)
    {
        $category = \App\Models\Category::join('article_map_category','article_map_category.category_id','=','category.id')
                                        ->where('article_map_category.article_id',$article->article_id)
                                        ->join('category_language','category_language.category_id','category.id')
                                        ->where('category_language.language_id',get_id_locale())
                                        ->get();
        //print_r($article->id);
        // die();



        if ($category)
        {
            foreach ($category as $cat)
            {
                if ($cat->slug == $inputLink)
                {
                    return 'active' ;
                }
            }
        }

    }

    return str_replace('.html','',$segment1);
}

function rebuild_url($key,$param=''){
    $url=Request::url();

    $request_param=Request::all();
    if($request_param){
        $count=1;
        $has_order=0;
        foreach($request_param as $k=>$item){
            if($count++==1){
                $url.='?';
            }
            else{
                $url.='&';
            }
            if($k==$key){
                $url.=$key.'='.$param;
                $has_order++;
            }
            else{
                $url.=$k.'='.$item;
            }

        }
        if($has_order==0){
            $url.='&'.$key.'='.$param;
        }
    }
    else{
        $url.='?'.$key.'='.$param;
    }

    return $url;

}

function get_banner($banner_id){
    $banner_class=new \App\Models\Banner();
    $data=$banner_class->where('status',1)
                       ->where('id',$banner_id)
                       ->with('images')
                       ->first();

    return $data;
}