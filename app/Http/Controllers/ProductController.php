<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('layout.products');
    }


    public function save(Request $request)
        {
            $product = new Product([
               'name' => $request->input('name'),
            ]);

            $usuario->save();
             //$nombreProduct = $request->input('name');
            // dd($nombreGenero);
    
            //uso las validaciones de Laravel
            $this->validate( $request, [
                'name' => 'required',
            ],
            [
                'name.required' => 'El campo Nombre es Obligatorio',
                
             ]);
        }
}
