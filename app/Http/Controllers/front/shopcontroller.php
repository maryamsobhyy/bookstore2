<?php

namespace App\Http\Controllers\front;

use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class shopcontroller extends Controller
{
    //
    public function index (){
        return view('front.pages.shop.index');
    }
    public function show ($id){
        $products=product::find($id);
        return view('front.pages.shop.show',compact('products'));
    }
}
