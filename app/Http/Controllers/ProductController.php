<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
            Cart::add($product->id, $product->title, 1, $product->price,['img_url'=>$product->image->find($product->main_img)->url]);
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
        if(Cart::count() == 0){
            return redirect('/');
        }
        return view('public.product.checkout')->with('cart',Cart::content());
    }

    public function payment()
    {
        if(Cart::count() == 0){
            return redirect('/');
        }
        //todo: Xử lý lưu cart
        return view('public.product.payment');
    }

    public function submit_payment(Request $request){
        if(Cart::count() == 0){
            return redirect('/');
        }
        $rq = $request->all();
        $customer = (Customer::create($rq));

        $od = new Order;
        $od->data_cache = json_encode(Cart::content());
        $od->customer_id = $customer->id;
        $od->save();
        return redirect("/product/finish");
    }

    public function finish(){
        if(Cart::count() == 0){
            return redirect('/');
        }
        Cart::destroy();
        //todo: Xử lý lưu cart
        return view('public.product.finish');
    }

    public function remove_item_in_cart($rowId,$redirect){
        Cart::remove($rowId);
        if($redirect == 'checkout'){
            return Redirect('/product/checkout');
        }
        return Redirect('/');
    }
}
