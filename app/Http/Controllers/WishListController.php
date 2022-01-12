<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class WishListController extends Controller
{
    //

    public function index(){
        $items = Auth::guard('client')->user()->wishlist()->latest()->get();
//        dd($items);
    return view('wishlist',compact('items'));

    }
    public function store(){
//        dd(request('productId'));
        if (!Auth::guard('client')->user()->wishlistsHas(request('productId'))){
            Auth::guard('client')->user()->wishlist()->attach(request('productId'));
            Alert::success('success', "");

            return response()->json(['message'=>'Added successfully to your wish list']);
        }

        else{
            return response()->json(['message'=>'This product already in you wishlist']);

        }
    }

    public function destroy(){
        Auth::guard('client')->user()->wishlist()->detach(request('productId'));
        return response()->json(['message'=>'Deleted successfully to your wish list']);

    }
}
