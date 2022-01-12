<?php


namespace App\Http\Controllers\admin;

use App\Models\Work;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;


class whyWorkController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $works = Work::where('type',3)->paginate(9);

      return view("/dashboard/why_works/index",["works"=>  $works ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      return view('/dashboard/why_works/create');

  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
      $messeges = [


          'title_en.required'=>"العنوان مطلوب",
          'title_ar.required'=>"العنوان مطلوب",
          'content_en.required'=>"المضمون مطلوب",
          "content_ar.required"=>"المضمون مطلوب",



      ];


      $validator =  Validator::make($request->all(), [


          "title_en"=>  " required",
          "title_ar"=>  " required",
          "content_en"=>  " required" ,
          "content_ar"=>  " required",

      ], $messeges);



      if ($validator->fails()) {
          Alert::error('error', $validator->errors()->first());
          return back();
      }

      $work= Work::create($request->all());
      if ($work){

          session()->flash('success', "success");
          if(session()->has("success")){
              Alert::success('Success Title', 'Success Message');
          }

          return redirect()->route('why_works.index');

      }


  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
      $work=Work::findOrFail($id);
      return view('/dashboard/why_works/edit',["work"=>$work]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request,$id)
  {
      $messeges = [


          'title_en.required'=>"العنوان مطلوب",
          'title_ar.required'=>"العنوان مطلوب",
          'content_en.required'=>"المضمون مطلوب",
          "content_ar.required"=>"المضمون مطلوب",


      ];


      $validator =  Validator::make($request->all(), [


          "title_en"=>  " required",
          "title_ar"=>  " required",
          "content_en"=>  " required" ,
          "content_ar"=>  " required",

      ], $messeges);

      if ($validator->fails()) {
          Alert::error('error', $validator->errors()->first());
          return back();
      }

      $work= Work::findOrFail($id);
      $work= $work->update($request->all());
      if ($work){

          session()->flash('success', "success");
          if(session()->has("success")){
              Alert::success('Success ', 'Success Message');
          }

          return redirect()->route('why_works.index');

      }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
      $category= Work::findOrFail($id);



      $category->delete();



      session()->flash('success', "success");
      if(session()->has("success")){
          Alert::success('Success Title', 'Deleted successfully');
      }
      return redirect()->route('why_works.index');


  }
  
}

?>