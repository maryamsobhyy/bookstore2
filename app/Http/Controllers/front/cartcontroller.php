<?php

namespace App\Http\Controllers\front;

use App\Models\product;
// use Darryldecode\Cart\Cart;
use Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class cartcontroller extends Controller
{
    //
    public function index(Request $request,$id){
        if (auth()->check()){
            $user=(auth()->user()->id);
            $product=product::find($id);
            Cart::session($user)->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->quantity,
            'attributes' => array(),
            'associatedModel' => $product
        ));
        return back();
        // dd(Cart::session(auth()->id())->getContent());
        // if (cart::session($user)->isEmpty ()){
        //     echo "Cart is emapty";
        // }
        // else{
        //     echo "Cart is Not empty";
        // }
        // echo "<br>";
        // $total = Cart::session($user)->getTotal();
        // $Subtotal = Cart::session($user)->getSubTotal();
        // $totalquantity = Cart::session($user)->getTotalQuantity();
        // $cart = Cart::getContent()->toArray();
        // foreach ($cart as $key=>$value){
        //     echo $value['name'].":" .$value['price'].":".$value['quantity']."<br>";
        // }
        // dd($cart,$total,$totalquantity,$Subtotal);
    }
    // else{
    //     return redirect()->route('login');
    // }
    // }
    // public function show(){
    //     $cart = Cart::getContent()->toArray();
    //     return view('front.pages.cart.cartproducts',compact('cart'));
    }

}
