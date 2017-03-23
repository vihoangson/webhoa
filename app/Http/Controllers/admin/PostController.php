<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\CategoryAllocation;
use App\Image;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate();
        return view('admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.edit');
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
    public function store(Request $request)
    {
        $rq = $request->all();
        $p = Post::create($rq);

//        $this->upload_file($p,$request);
//        $p->main_img = $p->image->first()->id;
        $p->save();
        return redirect('admin/post');
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
        $post = Post::find($id);
        return view('admin.post.show')->with(compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view("admin.post.edit")->with(compact('post'));
        //
    }
    public function update_ajax(\Illuminate\Http\Request $requests){
        switch($requests->process){
            case 'change_main_img':
                $p = Post::find($requests->pid);
                $p->main_img = $requests->id;
                $p->save();
                break;
            case 'delete_img_post':
                $img = Image::find($requests->id);
                $img->post()->detach();
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
    public function update(Request $request, $id)
    {
        $rq = $request->all();
        $p = Post::find($id);
        $p->title = $rq['title'];
        $p->summary = $rq['summary'];
        $p->content = $rq['content'];

        if(isset($rq['active'])){
            $p->active = $rq['active'];
        }else{
            $p->active = 0;
        }
        $p->save();
//        if(isset($rq['category'])){
//            // todo: phần này đã lưu được
//            $p->category()->sync($rq['category']);
//        }

//        $this->upload_file($p,$request);
//        if(!$p->main_img){
//            $p->main_img = $p->image->first()->id;
//            $p->save();
//        }
        return redirect('admin/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pd = Post::find($id);
        $pd->delete();
        return redirect('/admin/post');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function template()
    {
        return view('admin.post.template');
    }
}
