@extends('layouts.default')

@section('estilos')
<link rel="stylesheet" href= "/css/products.css">
<style media="screen">
  .container {
    width: 50%;
    margin-bottom: 4%;
  }
  .btn-primary a {
    color: white;
  }
</style>
@endsection


@section('contenido')
<div class="ropa">

       @foreach ($products as $product)
        <div class="container">
          <div class="row">
            <div class="col">
              <img width="250px" class="card-img-top" src="/storage/{{$product->image}}" alt="Card image cap">
            </div>
            <div class="col">
              <div class="card-title">{{$product->name}}</div>

              <div class="card-text">Precio: {{$product->price}}</div>


              <div class="card-text">Categoria: {{$product->category->name}} </div>


              <div class="card-text">Descripción: {{$product->description}} </div>



              <form class="" action="/carrito" method="post" enctype="multipart/form-data">
                     @csrf
                     <input type="number" name="quantity" min="0" max="5" value="1">
                     <button type="submit" name="product_id" value="{{$product->id}}">Agregar Carrito</button>
                   </form>

              <div class="btn btn-primary"><a href="/products">Volver</a></div>

              </div>

          </div>
        </div>


      {{$products->links()}}
    </div>
    @endforeach
  </div>
    @endsection
