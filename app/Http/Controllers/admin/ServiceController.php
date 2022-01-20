<?php

namespace App\Http\Controllers\admin;

use App\Models\Service;
use App\Models\ServiceImg;
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

      $services = Service::paginate(9);


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
        // dd ($request->all());
        $validator =  Validator::make($request->all(), [

            "title_en"=>  " required",
            "title_ar"=>  " required",

            "name_en"=>  " required",
            "name_ar"=>  " required",
            "content_en"=>  " required" ,
            "content_ar"=>  " required",
            "category_id"=>  " required",
            'photo' => 'required|mimes:jpg,webp,jpeg,png|max:4100',
            'background_photo' => 'required|mimes:jpg,webp,jpeg,png|max:4100',
            'section2_photo' => 'mimes:jpg,webp,jpeg,png|max:4100',
            'photos' => 'required',
            'photos.*' => 'mimes:jpg,jpeg,webp,png|max:4100',

        ]);



        if ($validator->fails()) {
            Alert::error('error', $validator->errors()->first());
            return back()->withInput();
        }
        $imgs = $request->photos;

        if (count($imgs) > 10) {

            Alert::success('error ', 'الحد الاقصي للتحميل في المرة الواحدة 10 صور');
            return back();
        }


        if ($request->hasfile('photo')) {

            $image = $request->photo;
            $original_name = strtolower(trim($image->getClientOriginalName()));
            $file_name = time() . rand(100, 999) . $original_name;
            $path = 'uploads/services/images/';

            if (!Storage::exists($path)) {
                Storage::disk('public')->makeDirectory($path);
            }
            $img = \Image::make($image)->resize(310,416);
            $img->save(public_path('storage/' . $path . $file_name), 90);

            $new = $path.$file_name ;
            // dd($new);
            $request->merge(['img' => $new]);

        }
            if ($request->hasfile('background_photo')) {

            $image = $request->background_photo;
            $original_name = strtolower(trim($image->getClientOriginalName()));
            $file_name = time() . rand(100, 999) . $original_name;
            $path = 'uploads/services/images/';

            if (!Storage::exists($path)) {
                Storage::disk('public')->makeDirectory($path);
            }
            $img = \Image::make($image)->resize(1349 , 495);
            $img->save(public_path('storage/' . $path . $file_name), 90);
            $new = $path.$file_name ;
            $request->merge(['background_img' => $new]);

        }
            if ($request->hasfile('section2_photo')) {

            $image = $request->section2_photo;
            $original_name = strtolower(trim($image->getClientOriginalName()));
            $file_name = time() . rand(100, 999) . $original_name;
            $path = 'uploads/services/images/';

            if (!Storage::exists($path)) {
                Storage::disk('public')->makeDirectory($path);
            }
            $img = \Image::make($image)->resize(689 , 515);
            $img->save(public_path('storage/' . $path . $file_name), 90);
            $new = $path.$file_name ;
            $request->merge(['section2_img' => $new]);

        }



        $service = Service::create($request->except(['photo','photos','background_photo','section2_photo']));
        // $service = Service::create($request->except(['photo','photos']));

        // foreach ($request->photos as $photo) {
        //     $filename = $photo->store('', ['disk' => 'my_files']);
        //     ServiceImg::create([
        //         'service_id' => $service->id,
        //         'img' => $filename
        //     ]);
        // }

        if ($request->hasfile('photos')) {

            $error = 0;
            foreach ($imgs as $img) {
                //add new name for img
                $new_name_img = time() . uniqid() . "." . $img->getClientOriginalExtension();

                //move img to folder
                $img1 = \Image::make($img)->resize(887,500);
                $img1->save(public_path('upload/services/' . $new_name_img), 90);
                $post1 = ServiceImg::create([
                    'service_id' => $service->id,
                    "img" =>  "upload/services/" . $new_name_img,

                ]);
                //            dd($post);

                if (!$post1) {
                    $error++;
                }
            }
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
      $service_images=ServiceImg::where('service_id', $id)->get();

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
      $service=Service::findOrFail($id);
    //   dd($service->category_id);
    //   dd($service);
      return view('/dashboard/services/edit', compact('service'));


  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function updateService(Request $request, $id)
  {



    $validator =  Validator::make($request->all(), [

        "title_en"=>  " required",
        "title_ar"=>  " required",
        "name_en"=>  " required",
        "name_ar"=>  " required",
        "content_en"=>  " required" ,
        "category_id"=>  " required" ,
        "content_ar"=>  " required",
        'photo' => 'mimes:jpg,webp,jpeg,png|max:4100',
        'background_photo' => 'mimes:jpg,webp,jpeg,png|max:4100',
        'section2_photo' => 'mimes:jpg,webp,jpeg,png|max:4100',

    ]);



    if ($validator->fails()) {
        Alert::error('error', $validator->errors()->first());
        return back()->withInput();
    }

    $service=Service::findOrFail($id);
    // dd($service->img);
    if (!$service) {
        Alert::error('error', 'هذا الخدمه غير مسجله بالنظام');
        return back();
    }


    if ($request->hasFile('photo')) {

        $image = $request->file('photo');
        $original_name = strtolower(trim($image->getClientOriginalName()));
        $file_name = time() . rand(100, 999) . $original_name;
        $path = 'uploads/services/images/';

        if (!Storage::exists($path)) {
            Storage::disk('public')->makeDirectory($path);
        }

        if (file_exists(storage_path('app/public/' . $service->img))) {
            unlink(storage_path('app/public/' . $service->img));
        }
        $img = \Image::make($image)->resize(310,416);
        $img->save(public_path('storage/' . $path . $file_name), 90);
        $new = $path.$file_name ;
        // dd($new);
        $request->merge(['img' => $new]);

    }

    if ($request->hasFile('background_photo')) {

        $image = $request->file('background_photo');
        $original_name = strtolower(trim($image->getClientOriginalName()));
        $file_name = time() . rand(100, 999) . $original_name;
        $path = 'uploads/services/images/';

        if (!Storage::exists($path)) {
            Storage::disk('public')->makeDirectory($path);
        }

        if (file_exists(storage_path('app/public/' . $service->background_img))) {
            unlink(storage_path('app/public/' . $service->background_img));
        }
        $img = \Image::make($image)->resize(1349 , 495);
        $img->save(public_path('storage/' . $path . $file_name), 90);
        $new = $path.$file_name ;
        $request->merge(['background_img' => $new]);



    }
    if ($request->hasFile('section2_photo')) {
        // dd('km');
        $image = $request->file('section2_photo');
        $original_name = strtolower(trim($image->getClientOriginalName()));
        $file_name = time() . rand(100, 999) . $original_name;
        $path = 'uploads/services/images/';

        if (!Storage::exists($path)) {
            Storage::disk('public')->makeDirectory($path);
        }

        if (file_exists(storage_path('app/public/' . $service->section2_img))) {
            unlink(storage_path('app/public/' . $service->section2_img));
        }

        $img = \Image::make($image)->resize(689 , 515);
        $img->save(public_path('storage/' . $path . $file_name), 90);
        $new = $path.$file_name ;
        $request->merge(['section2_img' => $new]);



    }

    $service = $service->update($request->except(['photo','background_photo','section2_photo']));

    session()->flash('success', "success");
    if (session()->has("success")) {
        Alert::success('Success ', 'Success Message');
    }
    return redirect()->route('services.index');






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


      if (file_exists(storage_path('app/public/' . $service->img))) {
        unlink(storage_path('app/public/' . $service->img));
    }
    if (file_exists(storage_path('app/public/' . $service->background_img))) {
        unlink(storage_path('app/public/' . $service->background_img));
    }

      if (file_exists(storage_path('app/public/' . $service->section2_img))) {
        unlink(storage_path('app/public/' . $service->section2_img));
    }
    if (file_exists(storage_path('app/public/' . $service->background_img))) {
        unlink(storage_path('app/public/' . $service->background_img));
    }


      foreach ($service->services_images as $projectitem){

          if(file_exists(public_path($projectitem->img))){
              unlink(public_path($projectitem->img));
          }else{
              dd('File does not exists.');
          }





      }



      $service->delete();

      $img = ServiceImg::where("service_id", $id)->get();
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
