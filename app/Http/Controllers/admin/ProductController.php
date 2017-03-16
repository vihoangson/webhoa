<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\CategoryAllocation;
use App\Post;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate();
        //dd($products[0]->category[0]->name);
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.edit');
    }

    /**
     * @param Request $request
     */
    public function up(Request $request){



        /**
         * Upload in editor
         */
        if(isset($request->image_editor)){
            $extension = $request->image_editor->getClientOriginalExtension();
            $destinationPath = 'uploads'; // upload path
            $fileName = time()."_".rand(11111,99999).'.'.$extension; // renameing image_editor
            $request->image_editor->move($destinationPath,$fileName);
            header('Content-Type: application/json');
            echo $destinationPath.'/'.$fileName;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CheckProductRequest $request)
    {
        $rq = $request->all();
        $p = Product::create($request->all());
        if(isset($rq['category'])){
            // todo: phần này đã lưu được
            $p->category()->sync($rq['category']);
        }
        return redirect('admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function template()
    {
        return view('product.template');
    }
}
