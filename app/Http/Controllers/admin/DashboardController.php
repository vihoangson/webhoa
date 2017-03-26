<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\CategoryAllocation;
use App\Image;
use App\Post;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.dashboard.index');
    }

    public function logout(){
        Auth::logout();
        return redirect('/admin/');
    }
}
