<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    public function index(){
        $index= Product::all();
        return view('layouts.products')->with(['productos'=>$index]);

    }   

    public function create()
    {
        $categorias= Category::all();
        return view('layouts.products', compact('categorias'));
    
    }

    public function edit($id){
        $productoEditado = Product::find($id);
        $categorias= Category::all();
        return view ('layouts.productsEdit');
    }

    public function save(Request $request)
        {
            
            $this->validate( $request, [
                'name' => 'required',
            ],
            [
                'name.required' => 'El campo Nombre es Obligatorio',
             ]);
            
            $product = new Product([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'desc' => $request->input('desc'),
                'category_id' => $request->input('category_id'),
            ]);
            
            $product->save();
             //$nombreProduct = $request->input('name');
            // dd($nombreGenero);
    
            //uso las validaciones de Laravel
        }
}
