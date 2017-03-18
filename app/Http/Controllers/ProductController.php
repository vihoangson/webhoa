<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        return view('public.product.list')->with(['products'=>$products]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('public.product.show')->with(['product'=>$product]);
    }

    public function add_cart($id)
    {
        if(isset($id)){
            $product = Product::find($id);
            Cart::add($product->id, $product->title, 1, $product->price);
            return redirect('/product/checkout');
        }
    }

    public function update_cart(Request $request)
    {
        $rq = $request->all();
        foreach ($rq['ql'] as $key => $item) {
            Cart::update($key,$item);
        }
        return redirect('/product/checkout');
    }

    public function checkout()
    {
        return view('public.product.checkout')->with('cart',Cart::content());
    }

    public function payment()
    {
        //todo: Xử lý lưu cart
        return view('public.product.payment');
    }

    public function submit_payment(Request $request){
        $rq = $request->all();
        //Customer;
        dd($request);
    }

    public function finish(){
        Cart::destroy();
        //todo: Xử lý lưu cart
        return view('public.product.finish');
    }
}
