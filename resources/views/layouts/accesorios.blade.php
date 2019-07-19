@extends('layouts.default')

@section('estilos')
<link rel="stylesheet" href= "/css/products.css">
<style>
  .card-img-top
  {
    width: 93%;
    margin-bottom: 15px;
    margin-top: 60px;
  }
  .btn-primary {
    margin-bottom: 15px;
  }
  .btn-primary a {
    color: white;
  }
  .btn-success {
      margin-right: 5px;
  }
  .btn-success a {
    color: white;
  }
  .btn-danger {
    margin-right: 5px;
  }
  .btn-info a {
    color: white;
  }
  .quantity {
    margin-top: 7px;
  }
  .container2 {
    display: flex;
  }
</style>
@endsection



@section('contenido')
<div class="ropa">
  <div class="ropa_content">
    <div class="row">
      <div class="col">
        <div class="ropa_subtitle">WISH
        </div>
        <div class="ropa_title"> ACCESORIOS
        </div>
      </div>
    </div>
  </div>

@if((Auth::user())&& (Auth::user()->is_admin))
<div class="container">
  <div class="row">
    <div class="col">
      <div class="btn btn-primary"><a href="/products/create">Agregar Nuevo Accesorio</a></div>
    </div>
  </div>
</div>
@else
@endif
        <div class="container">
          <div class="row">
            @foreach ($products as $product)
            <div class="col-sm-4">


                <img width="250px" class="card-img-top" src="/storage/{{$product->image}}" alt="Card image cap">

                <div class="card-text">${{$product->price}}</div>

                <div class="card-title">{{$product->name}}</div>

                <div hidden class="card-text">Categoria: {{$product->category->name}} </div>

                <div hidden class="card-text">Descripción: {{$product->description}} </div>

                @if((Auth::user())&& (Auth::user()->is_admin))
                <div class="container2">
                  <div class="btn btn-success" ><a href="/products/edit/{{$product->id}}">Editar</a></div>
                  <form class="" action="/products/delete/{{$product->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" name="eliminar" id="eliminar">Apagar</button>
                  </form>
                </div>
                @else
                @endif


                  <form class="quantity" action="/carrito" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="number" name="quantity" min="1" max="5" value="1">
                    <button type="submit"  name="product_id" class="btn btn-secondary" value="{{$product->id}}">Agregar Carrito</button>
                  </form>


              </div>

              @endforeach

          </div>
        </div>


      {{$products->links()}}
    </div>
    @endsection
