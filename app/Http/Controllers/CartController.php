<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Cart;
use App\Product;

class CartController extends Controller
{
    public function indexCart(){
      $user = Auth::user();
      $products = $user->cart;
      return view('layouts.cart')->with(['cart' => $products]);
    }

    public function delete($id,  Request $request){
     $user =Auth::user();
     $user->cart()->detach($id);
     return redirect('/carrito');
   }

   
    public function add(Request $request){
      $user = Auth::user();
      $products = $user->cart()->where('product_id', $request->product_id)->first();
      //dd($products);
      if ($products) {
          $quantity = $products->pivot->quantity + 1;
             $user->cart()->updateExistingPivot($request->product_id,['quantity'=> $quantity ]);
           } else {
             $user->cart()->attach($request->product_id,['quantity'=> 1]);
           }

         return redirect('carrito');
    }


}
