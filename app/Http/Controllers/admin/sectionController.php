<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

use App\Models\Section;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class sectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      $section = Section::first();


        return view("/dashboard/sections/index",["section"=>  $section  ]);
    }






    public function update(Request $request)
    {
        //dd($request->name);
        $validator =  Validator::make($request->all(), [


           'logo' => 'mimes:jpg,webp,jpeg,png',



        ]);






        if ($validator->fails()) {
            Alert::error('error', $validator->errors()->first());
            return back();
        }
      //  dd(json_encode($request->all())) ;

        //upload file logo
     if($request->img  ){
     $img =  $request->img ;
      //add new name for img
      $new_name_img = time().uniqid().".".$img->getClientOriginalExtension();

      //move img to folder
     $move = $img->move(public_path("upload"), $new_name_img);
    // dd(public_path("upload"));
    // $move2= move_uploaded_file( $_FILES["logo"]["tmp_name"],public_path("upload")."/".$new_name_img) ;
    // dd($move2);

       $new = "upload/sections/".$new_name_img ;
       $request->merge(['img' => $new]);

     }
     $section = Section::first();

     if ($request->hasfile('logo')) {
        // $images .= 'yes';

        $image = $request->file('logo');
        $original_name = strtolower(trim($image->getClientOriginalName()));
        $file_name = time() . rand(100, 999) . $original_name;
        $path = 'uploads/sections/images/';

        if (!Storage::exists($path)) {
            Storage::disk('public')->makeDirectory($path);
        }

//            return (storage_path('app/public/'.$cat->image_url));

        if($request->logo != null){
            if(file_exists(storage_path('app/public/'.$section->img)))
            {
                unlink(storage_path('app/public/'.$section->img));
            }
        }

        $section->img = $image->storeAs($path, $file_name, 'public');
        $section->save();

    }



        if( $section){
			request()->fullUrlWithQuery(['token ' => null]);
         // dd( $request->query() );
            $update= $section->update($request->except(["1","logo"]));


                 if($update){

                  session()->flash('success', "success");
                         if(session()->has("success")){
                         Alert::success('Success ', 'Success Message');
                          return back();
                          }
                }else{

                 session()->flash('error', "error");
                        if(session()->has("error")){
                         Alert::error('error ', 'error Message');
                        return back();

                         }
            }
        }else{

                $section= Section::create($request->all());
                if($section){

                    session()->flash('success', "success");
                           if(session()->has("success")){
                           Alert::success('Success ', 'Success Message');
                            return back();
                            }
                  }else{

                   session()->flash('error', "error");
                          if(session()->has("error")){
                           Alert::error('error ', 'error Message');
                          return back();

                           }
              }

        }

    }


}
