<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class privacycontroller extends Controller
{
    //
    public function index (){
        return view('front.pages.privacy.index');
    }
}
