<?php

namespace App\Http\Controllers\authentication;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class authcontroller extends Controller
{
    public function login (){
        return view('front.pages.Auth.login');
    }
    public function loginlogic(Request $request){

        $validator=$this->validatelogin($request->all());
        $validator->validate();
        $guards=array_slice(config('auth.guards'),0,-1);
        foreach (array_keys($guards) as $guard){
            if(Auth::guard($guard)->attempt($validator->validated())){
            return Redirect("/$guard/home") ;
        }
    }
        return back();
    }
    public function validatelogin($data){
       return Validator::make($data,[
       'email'=>'required|email',
       'password'=>'required|min:5'
       ]



    );

    }
    public function logout(){
        Auth::logout();
        return Redirect()->route('login');
    }
    public function logout_admin(){
        Auth::guard('admin')->logout();
        return Redirect()->route('login');
    }

}
