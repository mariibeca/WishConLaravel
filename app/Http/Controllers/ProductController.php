<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Cart;

class ProductController extends Controller
{
    public function index()
    {
      if(isset($_GET['name']))
      {
        $products = Product::where('name', 'LIKE', '%'.$_GET['name'].'%')->paginate(4);
      } else {
        $products= Product::where('category_id', 1)->paginate(6);

      }
        return view('layouts.products', compact('products'));
    }

    public function accesorios()
    {
        $products= Product::where('category_id', 2)->paginate(6);
        return view('layouts.accesorios', compact('products'));
    }

    public function indexPlus()
    {
        $products= Product::paginate(6);
        return view('layouts.productsPlus', compact('products'));
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
          'image' => 'nullable|file',

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
        //$productoAEditar->quantity = $request->quantity;

        if ($request->file('image')){
          $rutaDelArchivo = $request->file('image')->store('public');
          $nombreArchivo = basename($rutaDelArchivo);
          $productoAEditar->image = $nombreArchivo;
        }

        //lo mando a guardar
        $productoAEditar->save();
        return redirect('/products');

      }

    public function save(Request $request)
        {
          //uso las validaciones de Laravel
            $this->validate( $request, [
                'name' => 'required',
                'price' => 'required|numeric',
                'category_id' => 'required',
                'image' => 'nullable|file',

            ],
            [
                'name.required' => 'El campo Nombre es Obligatorio',
             ]);

             $rutaDelArchivo = $request->file('image')->store('public');
             $nombreArchivo = basename($rutaDelArchivo);

            $product = new Product([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'description' => $request->input('desc'),
                'category_id' => $request->input('category_id'),
                'image' => $nombreArchivo,

            ]);

            $product->save();
            return redirect('/products');

           }
           public function delete($id){
             Cart::where('product_id', $id)->delete();
             $productoADeletar = Product::find($id);
             $productoADeletar->delete();
             return redirect('/products');
           }

}
