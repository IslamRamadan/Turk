<?php

namespace App\Http\Controllers\admin;

use App\Models\Service;
use App\Models\Service_images;
use Faker\Provider\File;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\UploadRequest;



class ServiceController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */



  public function index()
  {
      $services = Service::where('type',1)->paginate(9);


      return view("/dashboard/services/index",["services"=>  $services ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      return view('/dashboard/services/create');

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
        return redirect()->route('services.index');    }


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

      return view('dashboard.services.show',compact('service','service_images'));
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
          }else{
              dd('File does not exists.');
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

      session()->flash('success', "success");
      if (session()->has("success")) {
          Alert::success('Success Title', 'Success Message');
      }
      return redirect()->route('services.index');


  }
  
}

?>