

@section("titulo")
listado de productos
@endsection

@section("principal")
<h1>Mis productos</h1>

  <div>
   <a href="/products/create" class="btn btn-primary">Nueva</a>
 </div>


  <div class="card-group">
        @foreach ($products as $product)
         <div class="card">
           <img class="card-img-top" src="{{$product->image}}" alt="Card image cap">
          <div class="card-body">
             <h5 class="card-title">{{$product->name}}</h5>
               <p class="card-text">Precio: {{$product->price}}</p>
               <p class="card-text">Categoria:{{$product->category}} </p>
               <p class="card-text">Descripción:{{$product->description}} </p>
               <p class="card-text">
                  <a class="btn btn-primary" href="">Ver Mas</a>
                  <a class="btn btn-success" href="/products/edit/{{$product->id}}">Editar</a>
              </p>
           </div>
                   </div>

                  @endforeach

                  {{$products->links()}}
             </div>
