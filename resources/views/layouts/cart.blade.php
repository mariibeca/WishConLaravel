@extends('layouts.default')
@section('estilos')
<link rel="stylesheet" href= "/css/ropa.css">

@endsection

@section('contenido')
<div class="ropa">
  <div class="ropa_content">
    <div class="row">
      <div class="col">
        <div class="ropa_subtitle">WISH
        </div>
        <div class="ropa_title"> Carrito
        </div>
      </div>
    </div>
  </div>

  <style media="screen">
    .row {
      padding:4px;
    }
    #promo {
      width:35%;
    }
    .logo a {
      text-decoration: none;
      color: white;
    }
    .login-registro a {
      text-decoration: none;
    }
    .main_nav ul {
      margin-bottom: auto;
    }
  </style>

  <div class="container">
    <div class="row">
        <div class="col">
        </div>
        <div class="col">
        </div>
        <div class="col">Quantity
        </div>
        <div class="col">Price
        </div>
        <div class="col">
        </div>
        <div class="col">Total
        </div>
    </div>

  </div>
  @foreach ($cart as $product)
  <div class="container" id="carrito{{$product->pivot->id}}">
        <div class="row">
              <div class="col">
                <img src="/storage/{{$product->image}}" alt="sweater" id="promo">
              </div>
              <div class="col">
                <div class="product_name"><a href="#">{{$product->name}}</a></div>
              </div>
              <div class="col">
                <input type="number" name="quantity" value="{{$product->pivot->quantity}}">
              </div>
              <div class="col">
                <div class="product_price">${{$product->price}}</div>
              </div>
              <div class="col">
                <div class="padding-eje-y">
                    <form class="" action="/carrito/delete/{{$product->id}}" method="post">
                      @csrf
                      @method('DELETE')
                      <p class="boton">
                        <button type="submit" class="btn btn-danger" name="eliminar" id="{{$product->pivot->id}}">Deletar</button>
                      </p>
                    </form>
               </div>
              </div>
              <div class="col">
                <div class="product_total">${{$product->price * $product->pivot->quantity}}</div>
              </div>
          </div>
        </div>
  @endforeach

<?php
$precio = 0;
foreach ($cart as $product) {
 $productTotal = $product->price * $product->pivot->quantity;
 $precio = $precio + $productTotal;
}
?>

  <div class="container">
      <div class="row">
        <div class="col">
        </div>
        <div class="col">
        </div>
        <div class="col">
        </div>
        <div class="col">
        </div>
        <div class="col">Total:
        </div>
        <div class="col">${{$precio}}
        </div>
      </div>
    </div>
</div>
<script type="text/javascript">
  var buttons = document.querySelectorAll('.eliminar');
  for (button of buttons) {
    boton.onclick = function(){
      cartId = this.getAttribute('id');

      fetch('http://localhost:8000/api/borrarProduct/'+cartId)
      .then(function(response){
            return response.json();
        })
      .then(function(datos){
        if (datos.eliminado) {
          div = document.querySelector('#carrito'+cartId);
          div.setAttribute("style", "display:none");
        }

        })
      .catch(function(error){
            console.log(error);
        });
    }
  }


</script>

  @endsection
