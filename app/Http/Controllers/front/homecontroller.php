<?php

namespace App\Http\Controllers\front;

use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;
class homecontroller extends Controller
{
    //
    public function index (){
        // dd(Cart::session(auth()->id())->getContent());
        $products=product::get();
        return view('front.pages.home.index',compact('products'));
    }

}
