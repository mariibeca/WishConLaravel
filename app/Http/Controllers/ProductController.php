<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products= Product::paginate(3);
        return view('layouts.products', compact('products'));

    }

    public function create()
    {
        $categorias= Category::all();
        return view('layouts.productsAdd', compact('categorias'));

    }

    public function edit($id){
        $product = Product::find($id);
        $categorias= Category::all();
        return view ('layouts.productsEdit', compact('categorias', 'product'));
    }

    public function update($id, Request $request)
    {
      $this->validate($request,
        [
          'name'=> 'required',
          'price'=> 'required|numeric',
          'category_id'=> 'required',

        ],
        [
          'required' => 'Campo obligatorio',
          'numeric' => 'Debe ser un numero',

        ]
      );
        //dd($request->title);
        //me traigo a la pelicula usando el find
        $productoAEditar = Product::find($id);
        //le cambio los atributos o valores al objeto que me traje arriba
        $productoAEditar->name = $request->name;
        $productoAEditar->price = $request->price;
        $productoAEditar->description = $request->description;
        $productoAEditar->category_id = $request->category_id;


        //lo mando a guardar
        $productoAEditar->save();

      }

    public function save(Request $request)
        {
          //uso las validaciones de Laravel
            $this->validate( $request, [
                'name' => 'required',
                'price' => 'required|numeric',
                'category_id' => 'required',

            ],
            [
                'name.required' => 'El campo Nombre es Obligatorio',
             ]);

            $product = new Product([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'description' => $request->input('desc'),
                'category_id' => $request->input('category_id'),

            ]);

            $product->save();
             //$nombreProduct = $request->input('name');
            // dd($nombreGenero);
            return redirect('/products');

        }
}
