

@section("titulo")
listado de productos
@endsection

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

@section("principal")
<h1>Mis productos</h1>

  <div>
   <a href="/admin/products/create" class="btn btn-primary">Nueva</a>
 </div>
    <style media="screen">
      .card-img-top{
        width: 20%;
      }
    </style>


    <div class="card">
  <div class="card-group">
        @foreach ($products as $product)
           <img width="250px" class="card-img-top" src="/storage/{{$product->image}}" alt="Card image cap">
          <div class="card-body">
             <h5 class="card-title">{{$product->name}}</h5>
               <p class="card-text">Precio: {{$product->price}}</p>
               <p class="card-text">Categoria: {{$product->category->name}} </p>
               <p class="card-text">Descripción: {{$product->description}} </p>
               <p class="card-text">
                  <a class="btn btn-primary" href="">Ver Mas</a>
                  <a class="btn btn-success" href="/admin/products/edit/{{$product->id}}">Editar</a>
                  <div class="padding-eje-y">
                      <form class="" action="/admin/products/delete/{{$product->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <p class="boton">
                          <button type="submit" class="btn btn-danger" name="eliminar" id="eliminar">Apagar</button>
                        </p>
                      </form>
                 </div>
                 <div class="">
                   <form class="" action="/carrito" method="post" enctype="multipart/form-data">
                     @csrf
                     <label for="quantity"></label>
                     <input type="number" name="quantity" min="1" max="5" value="1">
                     <button type="submit" name="product_id" value="{{$product->id}}">Agregar Carrito</button>
                   </form>

                 </div>
              </p>
           </div>
      @endforeach

                  {{$products->links()}}
             </div>
