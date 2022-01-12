<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Service;
use App\Models\Service_images;
use App\Models\Work;
use Illuminate\Http\Request;
use  App\Models\Item;
use  App\Models\Slider;



use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class homeController extends Controller
{
    public function index()
    {
        $sliders=Slider::all();
        $works = Work::where('type',1)->get();
        $how_works = Work::where('type',2)->get();
        $why_works = Work::where('type',3)->get();

        return view('front.index',compact('sliders','works','how_works','why_works'));
    }

    public function services_show($id){
        $service=Service::where('id', $id)->first();
        $service_images=Service_images::where('service_id', $id)->get();

        return view('front.service',compact('service','service_images'));


    }
    public function services_index(){
        return view('front.all_services');
    }

    public function projects_show($id){
        $service=Service::where('id', $id)->first();
        $service_images=Service_images::where('service_id', $id)->get();

        return view('front.project',compact('service','service_images'));


    }

    public function projects_index(){
        $services=Service::where('type',2)->get();


        return view('front.all_projects',compact('services'));
    }

    public function plans_show($id){
        $service=Service::where('id', $id)->first();
        $service_images=Service_images::where('service_id', $id)->get();

        return view('front.plan',compact('service','service_images'));


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
            'phone.required'=>"المضمون مطلوب",
            "comment.required"=>"المضمون مطلوب",


        ];


        $validator =  Validator::make($request->all(), [


            "name"=>  " required",
            "email"=>  " required",
            "phone"=>  " required" ,
            "comment"=>  " required",

        ], $messeges);

//            dd($request->all());


        if ($validator->fails()) {
            dd($validator->errors()->first());
            Alert::error('error', $validator->errors()->first());
            return back();
        }

        $contact= Contact::create($request->all());
        if ($contact){
//            dd('ok');

            session()->flash('success', "success");
            if(session()->has("success")){
                Alert::success('Success Title', 'Success Message');
            }

            return view('front.contact');

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