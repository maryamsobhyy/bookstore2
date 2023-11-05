<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class favouritescontroller extends Controller
{
    //
    public function index (){
        return view('front.pages.favourites.index');
    }
}
