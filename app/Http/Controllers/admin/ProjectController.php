<?php

namespace App\Http\Controllers\admin;

use App\Models\Service;
use App\Models\Service_images;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\UploadRequest;



class ProjectController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */



  public function index()
  {
      $services = Service::where('type',2)->paginate(9);

      return view("/dashboard/projects/index",["services"=>  $services ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      return view('/dashboard/projects/create');

  }
    public function store(UploadRequest $request)
    {
        $validator =  Validator::make($request->all(), [

            "title_en"=>  " required",
            "title_ar"=>  " required",

            "name_en"=>  " required",
            "name_ar"=>  " required",
            "content_en"=>  " required" ,
            "content_ar"=>  " required",
            'photo' => 'required|mimes:jpg,jpeg,png|max:4100',
            'photos' => 'required',
            'photos.*' => 'image|mimes:jpg,jpeg,png|max:4100',

        ]);



        if ($validator->fails()) {
            Alert::error('error', $validator->errors()->first());
            return back();
        }

        $img =  $request->photo ;
        //add new name for img
        $new_name_img = time().uniqid().".".$img->getClientOriginalExtension();

        //move img to folder
        $move = $img->move(public_path("upload/sliders"), $new_name_img);


        $new = "upload/sliders/".$new_name_img ;
        $request->merge(['img' => $new]);



        $service = Service::create($request->except(['photo']));
        foreach ($request->photos as $photo) {
            $filename = $photo->store('', ['disk' => 'my_files']);
            Service_images::create([
                'service_id' => $service->id,
                'img' => $filename
            ]);
        }
        session()->flash('success', "success");
        if (session()->has("success")) {
            Alert::success('Success ', 'Success Message');
        }
        return redirect()->route('projects.index');    }




  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
//    $service=Service::find
      $service=Service::where('id', $id)->first();
      $service_images=Service_images::where('service_id', $id)->get();

      return view('dashboard.projects.show',compact('service','service_images'));
//  dd($service,$service_images);

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        foreach ($service->services_images as $projectitem){

            if(file_exists(public_path('myfiles/'.$projectitem->img))){
                unlink(public_path('myfiles/'.$projectitem->img));
            }


        }

        $service->delete();

        $img = Service_images::where("service_id", $id)->get();
        if ($img) {
            foreach ($img as $one) {
                if (file_exists(public_path($one->img))) {
                    gc_collect_cycles();

                    unlink(public_path($one->img));
                }
                $img->delete();
            }
        }
        // session()->flash('success', __('site.deleted_successfully'));


        session()->flash('success', "success");
        if (session()->has("success")) {
            Alert::success('Success Title', 'Success Message');
        }
        return redirect()->route('projects.index');


    }

}

?>