<?php

namespace App\Http\Controllers\API;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class authcontroller extends Controller
{
    //
    public function login(LoginRequest $request){
        // token
        $user=(User::where('email',$request->email)->get());
        dd($user->email);
        if(!Hash::check($user->password, $request->password)) return response()->json(['message'=>'invalid credationals']);
        $token=$user->createToken('user_token');
        return response()->json(['user'=>$user ,'token'=>$token->plainTextToken]);
    }
}
