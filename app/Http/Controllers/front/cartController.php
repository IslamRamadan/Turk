<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Item;
use  App\Models\Category;
use  App\Models\Slider;
use  App\Models\SubCategory;

use  App\Models\Order;
use  App\Models\OrderItem;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class cartController extends Controller
{
    public function go_to_cart(){
        return view ("front.cart.cart");
    }
    
    
    
    
    
    public function checkout(){
         $cart = session()->get('cart');
         
         if($cart==[]){
             Alert::error('error Title', "cart is empty");
          return back();  
         }
        
        return view("front.cart.checkout_en");
    }
    
    
    
    
    
    
    public function remove_from_cart(Request $request)
     {
         if($request->id) {

          $cart = session()->get('cart');

          if(isset($cart[$request->id])) {
          unset($cart[$request->id]);
         session()->put('cart', $cart);
 
                     }

       session()->flash('success', 'Product removed successfully');
       return redirect()->route("cart.show");
    }
}
    
    
    
    
    
     public function update_cart($item_id,$qut,Request $request){
         $cart = session()->get('cart');
         
         if($cart){
             
             if(isset($cart[$item_id])) {
                $cart[$item_id]['quantity'] = $qut;

                session()->put('cart', $cart);
                
                
                 
             }else{
 return get_response("0","error",1);
             }
             
         }else{
 return get_response("0","error",0);
         }
         
         $total = 0;
session()->put('cart', $cart);
if(count(session('cart')) > 0){
foreach(session('cart') as $id => $details){
    $total += $details['price'] * $details['quantity'] ;

}
}
 return get_response("0","error",$total);

     }
    
    
    
    //get method
    public function add_to_cart($item_id,$qut,Request $request){
        $cart = session()->get('cart');
$product = Item::findOrFail($item_id);
// if cart is empty then this the first product
if(!$cart) {

$cart = [
$item_id => [
"id" => $product->id,
"category_id"=>$product->category_id,

"name" => $product->name,
"name_en" => $product->name_en,
"quantity" => $qut,
"price" =>  $product->price,
"image" => $product->img,
"slug" => $product->id
]
];
//print_r($cart);
//die;
session()->put('cart', $cart);
return view("front.cart.cart");
//return redirect()->route("cart")->with('success', 'تم اضافة المنتج الي السلة..'); 
}

else{
if(isset($cart[$item_id])  ) {
  
return view("front.cart.cart");

return redirect()->route("cart")->with('success', 'تم اضافة المنتج الي السلة..'); 

}else{
    $vendor_id = $product->category_id ??0;
    foreach($cart as $k => $v) {
        if($vendor_id != $v["category_id"]){
            Alert::error('error Title', "Cart products must be from one Vendor, you can empty the cart");
          return back();  
            
        }
        
        
    }
    
    $cart[$item_id] = [
"id" => $product->id,
"name" => $product->name,
"name_en" => $product->name_en,
"quantity" => $qut,
"price" => $product->price,
"image" => $product->img,
"category_id"=>$product->category_id,

"slug" => $product->id
];
   session()->put('cart', $cart);
//print_r($cart);
//die;
return view("front.cart.cart");

return redirect()->route("cart")->with('success', 'تم اضافة المنتج الي السلة..'); 
}
}       
         
        
    }


//post method 


 public function add_to_cart_post(Request $request){
     
     $item_id = $request->item_id;
     $qut = $request->qut ;
     if($item_id =="" || $qut == ""){
         return back();
     }
        $cart = session()->get('cart');
$product = Item::findOrFail($item_id);
// if cart is empty then this the first product
if(!$cart) {

$cart = [
$item_id => [
"id" => $product->id,
"name" => $product->name,
"name_en" => $product->name_en,
"quantity" => $qut,
"price" =>  $product->price,
"image" => $product->img,
"category_id"=>$product->category_id,

"slug" => $product->id
]
];
//print_r($cart);
//die;
session()->put('cart', $cart);
return view("front.cart.cart");
//return redirect()->route("cart")->with('success', 'تم اضافة المنتج الي السلة..'); 
}

else{
if(isset($cart[$item_id])) {

$cart[$item_id]['quantity'] = $qut;

session()->put('cart', $cart);
//print_r($cart);
//die;
return view("front.cart.cart");

return redirect()->route("cart")->with('success', 'تم اضافة المنتج الي السلة..'); 

}else{
    $vendor_id = $product->category_id ??0;
    foreach($cart as $k => $v) {
        if($vendor_id != $v["category_id"]){
            Alert::error('error Title', "Cart products must be from one Vendor, you can empty the cart");
          return back();  
            
        }
        
        
    }
    $cart[$item_id] = [
"id" => $product->id,
"name" => $product->name,
"name_en" => $product->name_en,
"quantity" => $qut,
"price" => $product->price,
"image" => $product->img,
"slug" => $product->id,
"category_id"=>$product->category_id,
];
   session()->put('cart', $cart);
//print_r($cart);
//die;
return view("front.cart.cart");

return redirect()->route("cart")->with('success', 'تم اضافة المنتج الي السلة..'); 
}
}       
         
        
    }
    
    
    
    
    
    
    
    public function  checkout_store (Request $request) { 	
if(session('cart') and !empty(session('cart'))) {

 
 $rules = [
'username' => 'required',
'phone' => 'required',
 'country' => 'required',

 'city' => 'required',
'address' => 'required',
'email' => 'required',
 'postcode' => 'required',

];

$messages= [
'username.required'  => 'Please enter your username',
'address.required'  => 'Please enter the address',
'phone.required'  => 'Please enter the phone',
'country.required'  => 'Please choosse country ',
'city.required'  => 'Please enter the city',
'email.required'  => 'Please enter your email'
];

 $valid=Validator::make($request->all(),$rules, $messages);
  if ($valid->fails()) {
            Alert::error('error Title', $valid->errors()->first());
          return back();
  }
        
        $save = Order::create($request->all());


if($save->save()){ 
    $cart_item = (session('cart')); 

foreach($cart_item as $k => $v) { 
OrderItem::create([
    "item_id"=>  $v['id'],
    "category_id"=>$v["category_id"],

    "order_id"=> $save->id,
    "type"=> 2,
    "qut"=> $v['quantity'],
    "price"=> $v['price'], 
    "img"=> $v['image'] ,
    "user_id"=>$request->user_id??0 
    
    ]);
    
    $save->update([
        "category_id"=>$v['category_id']
        
        ]);
    
}
session()->put('cart', []);
    if($request->type=="knet"){
         $save->update([
        "payment_method"=>"knet( wating)"
        
        ]);
        return redirect()->route('v2_payment',$save->id); //order id
    }else{
        $save->update([
        "payment_method"=>"cash"
        
        ]);
         session()->flash('success', "order success");
          return redirect()->route("home");
    }
}

}
 else{
  Alert::error('error Title', "cart is empty");
          return back();   
 }
}





public function v2_payment(Request $request,$order_id,$user_id = null){
    
    
    $order =  Order::find($order_id);    

    
    //in live ---->true 
    //in test------>false
    $live = false;
    
    $success_url = "https://kocart.easyshop-qa.com/success/payment";
    $error_url = "https://kocart.easyshop-qa.com/error/payment";
    
    
    //fetching for order by id;
    //$order = Order::findOrFail($order_id);
    $total_order=$order->price;
    //$order_total = $order->total;  //for live  so delete comment if in live mode
 //   $total = $live?$total_order:6;
    $total = (isset($total_order))?$total_order:6;
    
    //fetching for user by id;
    //$order = User::findOrFail($user_id);
    
    
    //password from payment gateway
    $password = $live ?"get passs from gateway":stripslashes('test');

    //api_key
    $api_key = $live ?"get key from gateway":'jtest123';

    //merchant_id
    
    $merchant_id = $live ?"get  from gateway":"1201";


//username from payment gateway

  $user_name = $live ?" from gateway": "test";

    
    
    
    if (! function_exists( 'curl_version' )) {
exit ( "Enable cURL in PHP" );
}
$fields = array(
'merchant_id'=>$merchant_id,
'username' => $user_name,

'password'=>$password,
'api_key'=>$api_key, // in sandbox request
'order_id'=>$order_id, // MIN 30 characters with strong unique function (like hashing function with time)
'total_price'=>$total,
'CurrencyCode'=>'KWD',//only works in production mode
'CstFName'=>'Test Name',
'CstEmail'=>'test@test.com',
'CstMobile'=>'12345678',
'success_url'=>$success_url,
'error_url'=>$error_url,
'test_mode'=> $live?0:1, // test mode enabled
'whitelabled'=>true, // only accept in live credentials (it will not work in test)
'payment_gateway'=>'knet',// only works in production mode
'ProductName'=>json_encode(['computer’,’television']),
'ProductQty'=>json_encode([2,1]),
'ProductPrice'=>json_encode([150,1500]),
'reference'=>$order_id, // Reference that you want to show in invoice in ref column
//'ExtraMerchantsData'=>json_encode($extraMerchantsData)
);
$fields_string = http_build_query($fields);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://api.upayments.com/test-payment");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$fields_string);
// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec($ch);
curl_close($ch);
$server_output = json_decode($server_output,true);
//dd($server_output);
//header("Location:".$server_output["paymentURL"]); // PHP
if(array_key_exists("status", $server_output)){
      if($server_output["status"]=="success"){
              if(array_key_exists("paymentURL", $server_output)){
                  
                  //add payment for db and status= waiting
                  
            return redirect()->to($server_output["paymentURL"]);
        
        }
       }else{
                  if(array_key_exists("status", $server_output)){
                 return redirect()->back()->with($server_output["error_msg"]);
                  }else{
                      return redirect()->back()->with('error', 'server error 504');

                  }
           
       }
}
return redirect()->back()->with('error', 'server error 505');
} 
    
    
    public function success_payment(Request $request){
		
      //  dd("error");
        $payment_type = $request->payment_type; //Credit Card or Knet
$paymentID=$request->PaymentID; // Knet order id. (Store for future reference)
$result = $request->Result;// CANCELED or CAPTURED
$orderID =$request->OrderID;//Order_id that you sent as parameter while making payment request.You can update transaction using ordered.
$postDate = $request->PostDate;// Transaction post date(only for knet)
$tranID=$request->TranID;// Transaction ID (only for knet)
$ref = $request->Ref;// Reference by knet
 $trackID = $request->TrackID;// Knet track id (generated by gateway)
$auth = $request->Auth ;// Auth code (generated by gateway)

$data = Order::findOrFail($orderID);
           $data->update([
        "payment_method"=>"knet( success)"
        
        ]);
         return view('front.cart.success');
        //update payment status in db for this order------>status : paied
       //EX:  $record =  Payment::where("order_id",$orderID)->first();
        // if($record){ 
       // $record->update([ "status"=>"paied"]) ;
       // }
       // return view("")
        
    }
    
    
    
     public function error_payment(Request $request){
		//  dd("error");
        $payment_type = $request->payment_type; //Credit Card or Knet
$paymentID=$request->PaymentID; // Knet order id. (Store for future reference)
$result = $request->Result;// CANCELED or CAPTURED
$orderID =$request->OrderID;//Order_id that you sent as parameter while making payment request.You can update transaction using ordered.
$postDate = $request->PostDate;// Transaction post date(only for knet)
$tranID=$request->TranID;// Transaction ID (only for knet)
$ref = $request->Ref;// Reference by knet
 $trackID = $request->TrackID;// Knet track id (generated by gateway)
$auth = $request->Auth ;// Auth code (generated by gateway)
$data = Order::findOrFail($orderID);
           $data->update([
        "payment_method"=>"knet( error)"
        
        ]);
         return view('front.cart.error');
         
     }



 }


