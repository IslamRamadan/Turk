<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Post;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::where(function ($query) use($request){
            if ($request->input('search'))

                {
                    $query->where(function ($query) use($request){
                        $query->where('title_en','like','%'.$request->search.'%')
                        ->orWhere('title_ar','like','%'.$request->search.'%');



                    });
                }

        })->paginate(15);
      // flash('Welcome Aboard!');



        return view("/dashboard/posts/index",["posts"=>  $posts ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/dashboard/posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messeges = [

            'img.required'=>"صورة القسم مطلوبة",
            'img.mimes'=>" يجب ان تكون الصورة jpg او jpeg او png  ",
            'img.max'=>" الحد الاقصي للصورة 4 ميجا ",
            'title_en.required'=>"عنوان القسم مطلوب",
            'title_ar.required'=>"عنوان القسم مطلوب",
            'content_ar.required'=>"محتوي القسم مطلوب",
            'content_en.required'=>"محتوي القسم بالانجليزية مطلوب",


           ];


        $validator =  Validator::make($request->all(), [
            'title_en' => 'required',
            'title_ar' => 'required',
            'content_ar' => 'required',
            'content_en' => 'required',
            'img' => 'required|mimes:jpg,jpeg,png|max:4100',

        ], $messeges);



        if ($validator->fails()) {
            Alert::error('error', $validator->errors()->first());
            return back();
        }

       $img = $request->img;
       $title_ar= $request->title_ar;
       $title_en= $request->title_en;
        $content_en = $request->content_en;
        $content_ar = $request->content_ar;

       //add new name for img
       $new_name_img = time().".".$img->getClientOriginalExtension();

       //move img to folder
       $img->move(public_path("upload/posts"), $new_name_img);

        $post= Post::create([
       "img"=>  "upload/posts/".$new_name_img ,
       "title_ar"=>  $title_ar ,

       "title_en"=>  $title_en ,
            "content_en"=>  $content_en ,
            "content_ar"=>  $content_ar ,
        ]);
        if ($post){

            session()->flash('success', "success");
         if(session()->has("success")){
            Alert::success('Success Title', 'Success Message');
         }

            return redirect()->route('posts.index');

        }else{

            session()->flash('error', "error");
            if(session()->has("error")){
               Alert::success('error Title', 'error Message');
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
        $post=Post::findOrFail($id);

        return view('/dashboard/posts/edit',["post"=>$post]);
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
        $messeges = [


            'img.required'=>"صورة القسم مطلوبة",
            'img.mimes'=>" يجب ان تكون الصورة jpg او jpeg او png  ",
            'img.max'=>" الحد الاقصي للصورة 4 ميجا ",
            'title_en.required'=>"عنوان القسم مطلوب",
            'title_ar.required'=>"عنوان القسم مطلوب",
            'content_ar.required'=>"محتوي القسم مطلوب",
            'content_en.required'=>"محتوي القسم بالانجليزية مطلوب",

           ];


        $validator =  Validator::make($request->all(), [
            'title_en' => 'required',
            'title_ar' => 'required',
            'content_ar' => 'required',
            'content_en' => 'required',
            'img' => 'mimes:jpg,jpeg,png|max:4100',

        ], $messeges);



        if ($validator->fails()) {
            Alert::error('error', $validator->errors()->first());
            return back();
        }


        /////////
        if($request->photo){
            $img =  $request->photo ;
            //add new name for img
            $new_name_img = time().uniqid().".".$img->getClientOriginalExtension();

            //move img to folder
            $move = $img->move(public_path("upload/posts"), $new_name_img);
            // dd(public_path("upload"));
            // $move2= move_uploaded_file( $_FILES["logo"]["tmp_name"],public_path("upload")."/".$new_name_img) ;
            // dd($move2);

            $new = "upload/posts/".$new_name_img ;
            $request->merge(['img' => $new]);
        }
        $post= Post::findOrFail($id);
        $post= $post->update($request->except(['photo']));
        if ($post){

            session()->flash('success', "success");
            if(session()->has("success")){
                Alert::success('Success ', 'Success Message');
            }

            return redirect()->route('posts.index');

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {

      $post= Post::findOrFail($id);
      if(file_exists(public_path( $post->img))){
        unlink(public_path($post->img));
    };
      $post->delete();
     // session()->flash('success', __('site.deleted_successfully'));
     session()->flash('success', "success");
     if(session()->has("success")){
      Alert::success('Success Title', 'Success Message');
     }
      return redirect()->route('posts.index');

    }
}
