<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\productrequest;
use App\Http\Resources\productresource;
use Illuminate\Http\Request;
use App\Models\product;

class productcontroller extends Controller
{
    //
    public function index()
    {
        $products = Product::paginate();
        return response()->json(['data'=>productresource::collection($products)]);
    }
    public function store( productrequest $request)
    {
        // check request first
        $products = Product::create($request->all());
        return response()->json(new productresource($products));
    }
    public function destroy($id)
    {
        // check request first
        $products = Product::find($id);
        $products->delete();
        return response()->json(['message'=>'product{id} deleted sucessfully']);
    }
    public function update($id)
    {
        // check request first
        $products = Product::find($id);
        $products->delete();
        return response()->json(['message'=>'product{id} deleted sucessfully']);
    }
}
