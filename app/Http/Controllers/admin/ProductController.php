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
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.edit');
    }

    /**
     * @param Request $request
     */
    public function up(Request $request){



        /**
         * Upload in editor
         */
        if(isset($request->image_editor)){

            // todo: Bỏ list ext file ra ngoài config dùng chung
            // Lọc file
            if(!in_array(strtolower($request->image_editor->getClientOriginalExtension()),['jpg','png','gif'])){

            }

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

        $this->upload_file($p,$request);
        //print_r($p->image->first()->id);
        $p->main_img = $p->image->first()->id;
        $p->save();
        return redirect('admin/product');
    }

    private function upload_file($p,$request){

        /**
         * Upload files
         */
        if(is_array($request->file("image"))){
            $files = $request->file("image");
            $data_files = [];
            foreach ($files as $key => $file){
                if($file === null) continue;
                // todo: Bỏ list ext file ra ngoài config dùng chung
                // Lọc file
                if(!in_array(strtolower($file->getClientOriginalExtension()),['jpg','png','gif'])){
                    continue;
                }

                $file_name = time()."_".rand(10000,99999).".".$file->getClientOriginalExtension();
                $data_files[$key] = $file->move('uploads',$file_name);

                $img = new Image();
                $img->title = $file_name;
                $img->url = 'uploads/'.$file_name;
                $img->save();
                $p->image()->attach($img->id);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.product.show')->with(compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view("admin.product.edit")->with(compact('product'));
        //
    }
    public function update_ajax(\Illuminate\Http\Request $requests){
        switch($requests->process){
            case 'change_main_img':
                $p = Product::find($requests->pid);
                $p->main_img = $requests->id;
                $p->save();
                break;
            case 'delete_img_product':
                $img = Image::find($requests->id);
                $img->product()->detach();
                return response()->json([
                    'status' => $img->delete(),
                    'id' => $requests->id,
                ]);
                break;
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\CheckProductRequest $request, $id)
    {
        $rq = $request->all();
        $p = Product::find($id);
        $p->title = $rq['title'];
        $p->summary = $rq['summary'];
        $p->content = $rq['content'];
        $p->price = $rq['price'];
        $p->price_sale = $rq['price_sale'];
        $p->date_begin_sale = $rq['date_begin_sale'];
        $p->date_end_sale = $rq['date_end_sale'];
        if(isset($rq['active'])){
            $p->active = $rq['active'];
        }else{
            $p->active = 0;
        }
        $p->save();
        if(isset($rq['category'])){
            // todo: phần này đã lưu được
            $p->category()->sync($rq['category']);
        }

        $this->upload_file($p,$request);
        if(!$p->main_img){
            $p->main_img = $p->image->first()->id;
            $p->save();
        }
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pd = Product::find($id);
        $pd->image()->detach();
        $pd->category()->detach();
        $pd->delete();
        return redirect('/admin/product');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function template()
    {
        return view('admin.product.template');
    }
}
