<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use  App\Models\Product;
use App\Models\ProdImg;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $products = Product::where(function ($query) use($request){
            if ($request->input('search'))

                {
                    $query->where(function ($query) use($request){
                        $query->where('title_en','like','%'.$request->search.'%')
                        ->orWhere('title_ar','like','%'.$request->search.'%');



                    });
                }

        })->paginate(15);
        // dd($products[0]['img']);




        return view('/dashboard/products/index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('/dashboard/products/create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->photo1[0],$request->description_en1[0],$request->description_ar1[0]);

        //    dd($request->all());
        //        dd($request["4".'height']);

        $messeges = [

            'title_ar'=>'اسم المنتج بالعربيه مطلوب',
            'title_ar'=>'اسم المنتج بالانجليزيه مطلوب',
            'photo.required' => "صورة المنتج مطلوبة",
            'photo.required' => "صورة المنتج مطلوبة",
            'photo.mimes' => " يجب ان تكون الصورة jpg او jpeg او png  ",
            'photo.max' => " الحد الاقصي للصورة 4 ميجا ",

        ];


        $validator = Validator::make($request->all(), [

             'title_ar' => 'required',
             'title_ar' => 'required',
             'description_ar' => 'required',
             'description_en' => 'required',
            'photo' => 'required|mimes:webp,jpg,jpeg,png|max:4100',
            'photo1*' => 'mimes:jpg,webp,jpeg,png|max:4100',

            //            'size_photo' => 'required|mimes:jpg,jpeg,png|max:4100',

        ], $messeges);


        if ($validator->fails()) {
            Alert::error('error', $validator->errors()->first());
            return back()->withInput();
        }



        $image = $request->photo;
        $original_name = strtolower(trim($image->getClientOriginalName()));
        $file_name = time() . rand(100, 999) . $original_name;
        $path = 'uploads/products/images/';

        if (!Storage::exists($path)) {
            Storage::disk('public')->makeDirectory($path);
        }
        $img = \Image::make($image)->resize(550 , 309);
        $img->save(public_path('storage/' . $path . $file_name), 90);



        $product = Product::create([

            'appearance' => $request['appearance'] ?: 0,
            'title_ar' => $request['title_ar'] ?: '',
            'title_en' => $request['title_en'] ?: '',
            'description_en' => $request['description_en'] ?: '',
            'description_ar' => $request['description_ar'] ?: '',
            'img' => $path . $file_name,
        ]);

        if ($request->hasfile('photo1')) {
            $imgs = $request->photo1;
            $error = 0;
            for ($i=0;$i<count($imgs) ;$i++) {
                //add new name for img
                if(!empty($request->photo1[$i]) ){
                    $new_name_img = time() . uniqid() . "." . $imgs[$i]->getClientOriginalExtension();

                    //move img to folder
                    $img1 = \Image::make($imgs[$i])->resize(331, 336);
                    $img1->save(public_path('upload/advertising/' . $new_name_img), 90);
                    $post1 = ProdImg::create([

                        "product_id" => $product->id,
                        "description_en" => $request->description_en1[$i],
                        "description_ar" =>   $request->description_ar1[$i],
                        "img" =>  "upload/advertising/" . $new_name_img,


                    ]);
                    //            dd($post);

                    if (!$post1) {
                        $error++;
                    }

                }

            }
        }







        if (session()->has("success")) {
            Alert::success('Success ', 'Success Message');
        }

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', $id)->first();

        if ($product) {
            if (file_exists(storage_path('app/public/' . $product->img))) {
                unlink(storage_path('app/public/' . $product->img));
            }
            //            if (file_exists(storage_path('app/public/' . $product->height_img))) {
            //                unlink(storage_path('app/public/' . $product->height_img));
            //            }


            if ($product->cities) {
                if ($product->cities->count() > 0) {
                    foreach ($product->cities as $city) {
                        $city->delete();
                    }
                }
            }
            $product->delete();


            $size = ProdSize::where("product_id", $id)->get();
            $height = ProdHeight::where("product_id", $id)->get();
            $img = ProdImg::where("product_id", $id)->get();
            if ($size) {
                foreach ($size as $one) {
                    $one->delete();
                }
            }

            if ($height) {
                foreach ($height as $one) {
                    $one->delete();
                }
            }

            if ($img) {
                foreach ($img as $one) {
                    if (file_exists(public_path($one->img))) {
                        unlink(public_path($one->img));
                    }
                    $one->delete();
                }
            }


            $product->delete();
            session()->flash('success', "success");
            if (session()->has("success")) {
                Alert::success('نجح', ' تم حذف المنتج');
            }
        }

        //        return Response::json($user);
        return redirect()->route('products.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $sections=ProdImg::where('product_id',$id)->get();
        // dd($sections);
        return view('/dashboard/products/edit', compact('product','sections'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateProduct(Request $request, $id)
    {
        //    dd($request->all());
        $messeges = [
            'title_ar'=>'اسم المنتج بالعربيه مطلوب',
            'title_ar'=>'اسم المنتج بالانجليزيه مطلوب',
            'photo.required' => "صورة المنتج مطلوبة",
            'photo.required' => "صورة المنتج مطلوبة",
            'photo.mimes' => " يجب ان تكون الصورة jpg او jpeg او png  ",
            'photo.max' => " الحد الاقصي للصورة 4 ميجا ",
        ];

        $validator = Validator::make($request->all(), [
            'title_ar' => 'required',
            'title_ar' => 'required',
            'description_ar' => 'required',
            'description_en' => 'required',
            'photo' => 'mimes:webp,jpg,jpeg,png|max:4100',
        ], $messeges);


        if ($validator->fails()) {
            Alert::error('error', $validator->errors()->first());
            return back();
        }

        $product = Product::findOrFail($id);
        // dd($product->id);
        if (!$product) {
            Alert::error('error', 'هذا المنتج غير مسجل بالنظام');
            return back();
        }

        if ($request->hasFile('photo')) {

            $image = $request->file('photo');
            $original_name = strtolower(trim($image->getClientOriginalName()));
            $file_name = time() . rand(100, 999) . $original_name;
            $path = 'uploads/products/images/';

            if (!Storage::exists($path)) {
                Storage::disk('public')->makeDirectory($path);
            }

            if (file_exists(storage_path('app/public/' . $product->img))) {
                unlink(storage_path('app/public/' . $product->img));
            }
            $img = \Image::make($image)->resize(550 , 309);
            $img->save(public_path('storage/' . $path . $file_name), 90);



            $product1 = $product->update([
                'appearance' => $request['appearance'] ?: 0,
                'title_ar' => $request['title_ar'] ?: '',
                'title_en' => $request['title_en'] ?: '',
                'description_en' => $request['description_en'] ?: '',
                'description_ar' => $request['description_ar'] ?: '',
                'img' => $path . $file_name,

            ]);
        }



        else {
            $product1 = $product->update([
                'appearance' => $request['appearance'] ?: 0,
                'title_ar' => $request['title_ar'] ?: '',
                'title_en' => $request['title_en'] ?: '',
                'description_en' => $request['description_en'] ?: '',
                'description_ar' => $request['description_ar'] ?: '',
            ]);
        }


        // if ($request->hasfile('photo1')) {
        //     $imgs = $request->photo1;
        //     $error = 0;
        //     for ($i=0;$i<count($imgs) ;$i++) {
        //         //add new name for img
        //         if(!empty($request->photo1[$i]) ){
        //             $new_name_img = time() . uniqid() . "." . $imgs[$i]->getClientOriginalExtension();

        //             //move img to folder
        //             $img1 = \Image::make($imgs[$i])->resize(255, 200);
        //             $img1->save(public_path('upload/advertising/' . $new_name_img), 90);
        //             $post1 = ProdImg::updateOrCreate([

        //                 "product_id" => $product->id,
        //                 "description_en" => $request->description_en1[$i],
        //                 "description_ar" =>   $request->description_ar1[$i],
        //                 "img" =>  "upload/advertising/" . $new_name_img,


        //             ]);
        //             //            dd($post);

        //             if (!$post1) {
        //                 $error++;
        //             }

        //         }

        //     }
        // }
        // dd(count($request->description_en1));
        if ($request->has('description_en1')) {
            // dd('tmam',count($request->description_en1));
            $desc = $request->description_en1;
            $section_num = $request->sections;
            $error = 0;
            $section=ProdImg::where('product_id',$id)->get();
            // dd($section[0]);
            for ($i=0;$i<$section_num ;$i++) {
                //add new name for img

                    $section1[$i] = $section[$i]->update([
                        "product_id" => $product->id,
                        "description_en" => $request->description_en1[$i],
                        "description_ar" =>   $request->description_ar1[$i],
                    ]);

                   /////////
                   if(!empty($request->photo1[$i]) ){

                   $imgs = $request->photo1[$i];

                //    for ($i=0;$i<count($imgs) ;$i++) {
                    if(file_exists(public_path( $section[$i]->img))){
                        unlink(public_path($section[$i]->img));
                    }
                       //add new name for img
                       if(!empty($request->photo1[$i]) ){
                           $new_name_img = time() . uniqid() . "." . $imgs->getClientOriginalExtension();

                           //move img to folder
                           $img1 = \Image::make($imgs)->resize(331, 336);
                           $img1->save(public_path('upload/advertising/' . $new_name_img), 90);
                           $section1[$i] = $section[$i]->update([

                               "img" =>  "upload/advertising/" . $new_name_img,


                           ]);
                           //            dd($post);


                       }

                //    }
                }
                   ///////////
                    // if($section[$i]->description_en1==null&&$section[$i]->description_ar1==null){
                    //     if(file_exists(public_path( $section[$i]->img))){
                    //         unlink(public_path($section[$i]->img));
                    //     }
                    //     dd($section[$i]->description_en1,$section[$i]->description_ar1);
                    //     dd('stop');
                    //     $section[$i]->delete();
                    // }






            }
        }

        if ($request->hasfile('photo2')) {
            $imgs = $request->photo2;
            $error = 0;
            for ($i=0;$i<=count($imgs) ;$i++) {
                //add new name for img
                if(!empty($request->photo2[$i]) ){
                    $new_name_img = time() . uniqid() . "." . $imgs[$i]->getClientOriginalExtension();

                    //move img to folder
                    $img1 = \Image::make($imgs[$i])->resize(331, 336);
                    $img1->save(public_path('upload/advertising/' . $new_name_img), 90);
                    $post1 = ProdImg::create([

                        "product_id" => $product->id,
                        "description_en" => $request->description_en2[$i],
                        "description_ar" =>   $request->description_ar2[$i],
                        "img" =>  "upload/advertising/" . $new_name_img,


                    ]);
                    //            dd($post);



                }

            }
        }

        $empty_sections = ProdImg::where('product_id',$id)->where('description_en',null)->where('description_ar',null)->get();
        if ($empty_sections) {
            foreach ($empty_sections as $one) {
                // dd($one->img);
                if (file_exists(public_path($one->img))) {
                // dd($one->img);

                    unlink(public_path($one->img));
                }
                // dd("stop");

                $one->delete();
            }
        }







        //TODO :: -----------------------------//

        session()->flash('success', "success");
        if (session()->has("success")) {
            Alert::success('Success ', 'Success Message');
        }

        return redirect()->route('products.index', $id);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('id', $id)->first();

        if ($product) {
            if (file_exists(storage_path('app/public/' . $product->img))) {
                unlink(storage_path('app/public/' . $product->img));
            }




            // $product->delete();



            $img = ProdImg::where("product_id", $id)->get();
            // dd($img[0]);


            if ($img) {
                foreach ($img as $one) {
                    // dd($one->img);
                    if (file_exists(public_path($one->img))) {
                    // dd($one->img);

                        unlink(public_path($one->img));
                    }
                    // dd("stop");

                    $one->delete();
                }
            }


            $product->delete();
            session()->flash('success', "success");
            if (session()->has("success")) {
                Alert::success('نجح', ' تم حذف المنتج');
            }
        }

        //        return Response::json($user);
        return redirect()->route('products.index');
    }
    public function add_section(Request $request)
    {
        $type=$request->type;
        if ($type==1) {
            $val = ' <h3 class="text-center">فقره </h3>
        <div class="form-group">
            <label>مجتوي الفقره بالعربيه</label>
            <textarea type="text" name="description_ar1[]" class="form-control" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label>محتوي الفقره بالانجليزيه</label>
            <textarea type="text" name="description_en1[]" class="form-control" rows="10">
            </textarea>
        </div>


        <div class="form-group">
            <label>الصوره</label>
            <input type="file" name="photo1[]" class="form-control" value="">
        </div>';
        }
        else{
            $val = ' <h3 class="text-center">فقره </h3>
            <div class="form-group">
                <label>مجتوي الفقره بالعربيه</label>
                <textarea type="text" name="description_ar2[]" class="form-control" rows="10"></textarea>
            </div>

            <div class="form-group">
                <label>محتوي الفقره بالانجليزيه</label>
                <textarea type="text" name="description_en2[]" class="form-control" rows="10">
                </textarea>
            </div>


            <div class="form-group">
                <label>الصوره</label>
                <input type="file" name="photo2[]" class="form-control" value="">
            </div>';
        }


        return response()->json($val);

    }
}
