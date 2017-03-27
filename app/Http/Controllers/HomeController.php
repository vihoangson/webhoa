<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        //$this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('active', 1)->paginate();
        $feature_products = Product::where('active', 1)->paginate();

        return view('public.'.$this->template_path.'.product.homepage')->with(['products' => $products, 'feature_products' => $feature_products]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('public.'.$this->template_path.'.product.show')->with(['product' => $product]);
    }

    public function contact()
    {
        return view('public.'.$this->template_path.'.contact');
    }
}
