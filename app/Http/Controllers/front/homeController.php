<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryImg;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Service;
use App\Models\ServiceImg;
use App\Models\Work;
use Illuminate\Http\Request;
use  App\Models\Item;
use App\Models\PostImg;
use App\Models\ProdImg;
use App\Models\Product;
use  App\Models\Slider;



use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Alert;

class homeController extends Controller
{
    public function index()
    {
        $sliders=Slider::all();

        return view('front.index',compact('sliders'));
    }

    public function service_show($id){
        $service=Service::find($id);
        $service_images=ServiceImg::where('service_id',$id)->get();
        // dd($service_images);

        return view('front.show_service',compact('service','service_images'));
    }
    public function category_show($id){
        $category=Category::find($id);
        $category_images=CategoryImg::where('category_id',$id)->get();
        // dd($category_images);

        return view('front.show_category',compact('category','category_images'));
    }

    // public function service_show($id){
    //     $service=Service::where('id', $id)->first();
    //     $service_images=Service_images::where('service_id', $id)->get();

    //     return view('front.service',compact('service','service_images'));


    // }
    public function services_index(){
        return view('front.all_services');
    }

    public function all_products(){
        $products = Product::select('id','title_en','title_ar','img')->where('appearance',1)->get();

        return view('front.all_products',compact('products'));


    }

    public function single_product($id){
        $product=Product::where("appearance",1)->findOrFail($id);
        $product_imgs = ProdImg::where('product_id',$id)->get();
        // dd($product_imgs);
        return view('front.product',compact('product','product_imgs'));


    }
    public function projects_index(){
        $services=Service::where('type',2)->get();


        return view('front.all_projects',compact('services'));
    }

    public function all_posts(){
       $posts=Post::select('id','img','title_en','title_ar','brief_en','brief_ar','content_en','content_ar','updated_at')->get();
        // dd($posts);

        return view('front.all_posts',compact('posts'));


    }

    public function single_post($id){
        $post=Post::findOrFail($id);
        $post_img=PostImg::where('post_id',$id)->get();
        return view('front.single_post',compact('post','post_img'));
    }

    public function posts_index(){
        $posts=Post::all();
        return view('front.post',compact('posts'));
    }
    public function about(){
        return view('front.about');
    }

    public function contacts_index(){
        return view('front.contact');
    }

    public function contacts_store(Request $request){

        $messeges = [


            'name.required'=>"العنوان مطلوب",
            'email.required'=>"العنوان مطلوب",
            'phone.required'=>"رقم الهاتف مطلوب",
            "comment.required"=>"محتوي الرساله مطلوب",


        ];


        $validator =  Validator::make($request->all(), [


            "name"=>  " required",
            "email"=>  " required",
            "phone"=>  " required" ,
            "comment"=>  " required",

        ], $messeges);

//            dd($request->all());


        if ($validator->fails()) {
            // dd($validator->errors()->first());
            Alert::error('error', $validator->errors()->first());
            // Alert::success('Congrats', 'You\'ve Successfully Registered');

            return back()->withInput();
        }

        $contact= Contact::create($request->all());
        if ($contact){
//            dd('ok');

            session()->flash('success', "success");
            if(session()->has("success")){
                Alert::success('Success Title', 'Success Message');
            }

            return redirect()->route("home.index");

        }

    }




    public function product($id){
        $result = Item::with("images")->findOrFail($id);

        return view("front.product",compact("result","id"));
    }

    public function home()
    {

      $offers = Item::where("over",1)->where("activity",1)->paginate(15);
      $populars = Item::where("popular",1)->where("activity",1)->paginate(15);
      $vendors = Category::where("activity",1)->get();
      $sliders = Slider::get();
      return view("front.index",compact("offers","populars","vendors","sliders"));

    }




    public function vendor(Request $request,$id)
    {
      $records = Category::with("imgs")->where("activity",1)->findOrFail($id);
      $offers = Item::where("over",1)->where("activity",1)->where("category_id",$id)->paginate(15);
      $populars = Item::where("category_id",$id)->where("activity",1)->paginate(15);

      return view("front.vendor",compact("records","id","offers","populars"));

    }





}
