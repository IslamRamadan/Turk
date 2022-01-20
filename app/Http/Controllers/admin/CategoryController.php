<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Models\CategoryImg;
use Faker\Provider\File;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\UploadRequest;



class CategoryController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */



  public function index()
  {

      $categories = Category::paginate(9);


      return view("/dashboard/categories/index",["categories"=>  $categories ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      return view('/dashboard/categories/create');

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
            $path = 'uploads/categories/images/';

            if (!Storage::exists($path)) {
                Storage::disk('public')->makeDirectory($path);
            }
            $img = \Image::make($image)->resize(610,416);
            $img->save(public_path('storage/' . $path . $file_name), 90);

            $new = $path.$file_name ;
            // dd($new);
            $request->merge(['img' => $new]);

        }
            if ($request->hasfile('background_photo')) {

            $image = $request->background_photo;
            $original_name = strtolower(trim($image->getClientOriginalName()));
            $file_name = time() . rand(100, 999) . $original_name;
            $path = 'uploads/categories/images/';

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
            $path = 'uploads/categories/images/';

            if (!Storage::exists($path)) {
                Storage::disk('public')->makeDirectory($path);
            }
            $img = \Image::make($image)->resize(689 , 515);
            $img->save(public_path('storage/' . $path . $file_name), 90);
            $new = $path.$file_name ;
            $request->merge(['section2_img' => $new]);

        }



        $category = Category::create($request->except(['photo','photos','background_photo','section2_photo']));
        // $category = Category::create($request->except(['photo','photos']));

        // foreach ($request->photos as $photo) {
        //     $filename = $photo->store('', ['disk' => 'my_files']);
        //     CategoryImg::create([
        //         'category_id' => $category->id,
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
                $img1->save(public_path('upload/categories/' . $new_name_img), 90);
                $post1 = CategoryImg::create([
                    'category_id' => $category->id,
                    "img" =>  "upload/categories/" . $new_name_img,

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
        return redirect()->route('categories.index');    }


  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
//    $category=Category::find
      $category=Category::where('id', $id)->first();
      $category_images=CategoryImg::where('category_id', $id)->get();

      return view('dashboard.categories.show',compact('category','category_images'));
//  dd($category,$category_images);

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
      $category=Category::findOrFail($id);
    //   dd($category);
      return view('/dashboard/categories/edit', compact('category'));


  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function updateCategory(Request $request, $id)
  {



    $validator =  Validator::make($request->all(), [

        "title_en"=>  " required",
        "title_ar"=>  " required",
        "name_en"=>  " required",
        "name_ar"=>  " required",
        "content_en"=>  " required" ,
        "content_ar"=>  " required",
        'photo' => 'mimes:jpg,webp,jpeg,png|max:4100',
        'background_photo' => 'mimes:jpg,webp,jpeg,png|max:4100',
        'section2_photo' => 'mimes:jpg,webp,jpeg,png|max:4100',

    ]);



    if ($validator->fails()) {
        Alert::error('error', $validator->errors()->first());
        return back()->withInput();
    }

    $category=Category::findOrFail($id);
    // dd($category->img);
    if (!$category) {
        Alert::error('error', 'هذا الخدمه غير مسجله بالنظام');
        return back();
    }


    if ($request->hasFile('photo')) {

        $image = $request->file('photo');
        $original_name = strtolower(trim($image->getClientOriginalName()));
        $file_name = time() . rand(100, 999) . $original_name;
        $path = 'uploads/categories/images/';

        if (!Storage::exists($path)) {
            Storage::disk('public')->makeDirectory($path);
        }

        if (file_exists(storage_path('app/public/' . $category->img))) {
            unlink(storage_path('app/public/' . $category->img));
        }
        $img = \Image::make($image)->resize(610,416);
        $img->save(public_path('storage/' . $path . $file_name), 90);
        $new = $path.$file_name ;
        // dd($new);
        $request->merge(['img' => $new]);

    }

    if ($request->hasFile('background_photo')) {

        $image = $request->file('background_photo');
        $original_name = strtolower(trim($image->getClientOriginalName()));
        $file_name = time() . rand(100, 999) . $original_name;
        $path = 'uploads/categories/images/';

        if (!Storage::exists($path)) {
            Storage::disk('public')->makeDirectory($path);
        }

        if (file_exists(storage_path('app/public/' . $category->background_img))) {
            unlink(storage_path('app/public/' . $category->background_img));
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
        $path = 'uploads/categories/images/';

        if (!Storage::exists($path)) {
            Storage::disk('public')->makeDirectory($path);
        }

        if (file_exists(storage_path('app/public/' . $category->section2_img))) {
            unlink(storage_path('app/public/' . $category->section2_img));
        }
        $img = \Image::make($image)->resize(689 , 515);
        $img->save(public_path('storage/' . $path . $file_name), 90);
        $new = $path.$file_name ;
        $request->merge(['section2_img' => $new]);



    }

    $category = $category->update($request->except(['photo','background_photo','section2_photo']));

    session()->flash('success', "success");
    if (session()->has("success")) {
        Alert::success('Success ', 'Success Message');
    }
    return redirect()->route('categories.index');






  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
      $category = Category::findOrFail($id);


      if (file_exists(storage_path('app/public/' . $category->img))) {
        unlink(storage_path('app/public/' . $category->img));
    }
    if (file_exists(storage_path('app/public/' . $category->background_img))) {
        unlink(storage_path('app/public/' . $category->background_img));
    }

      if (file_exists(storage_path('app/public/' . $category->section2_img))) {
        unlink(storage_path('app/public/' . $category->section2_img));
    }
    if (file_exists(storage_path('app/public/' . $category->background_img))) {
        unlink(storage_path('app/public/' . $category->background_img));
    }


      foreach ($category->categories_images as $projectitem){

          if(file_exists(public_path($projectitem->img))){
              unlink(public_path($projectitem->img));
          }else{
              dd('File does not exists.');
          }





      }



      $category->delete();

      $img = CategoryImg::where("category_id", $id)->get();
      if ($img) {
          foreach ($img as $one) {
              if (file_exists(public_path($one->img))) {
                  gc_collect_cycles();

                  unlink(public_path($one->img));
              }
              $one->delete();
          }
      }

      session()->flash('success', "success");
      if (session()->has("success")) {
          Alert::success('Success Title', 'Success Message');
      }
      return redirect()->route('categories.index');


  }

}

?>
