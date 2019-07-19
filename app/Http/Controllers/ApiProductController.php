<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class ApiProductController extends Controller
{
    public function borrarCarrito($id){
      $delete = Cart::find($id);
      $delete->delete();
      return response()->jason(['delete' => 'true'], 200);
    }
}
