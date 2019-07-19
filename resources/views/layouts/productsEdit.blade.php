@extends('layouts.default')

@section('estilos')
<link rel="stylesheet" href= "/css/products.css">
@endsection

@section('contenido')

<div class="ropa">


  <div class="ropa_content">
    <div class="row">
      <div class="col">
        <div class="ropa_subtitle">WISH
        </div>
        <div class="ropa_title"> Editing
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col">

        <form class="" action="" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="name">Nombre</label>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="text" class="form-control" name="name" id="name"value="{{old("name") ?? $product->name  }}">
          </div>
          <div class="form-group">
            <label for="price">Precio</label>
            <input class="form-control" type="number" name="price" id="price" value="{{old("price") ?? $product->price  }}">
          </div>
          <div class="form-group">
            <label for="category">Categoria</label>
            <select name="category_id">
              <option value="">Seleccione</option>
              @foreach($categorias as $categoria)
              <option value="{{$categoria->id}}">{{$categoria->name}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="decription">Descripción:</label>
            <input class="form-control" type="text" name="desc" id="desc" value="{{old("desc")}}">
          </div>



          <div class="form-group">
            <label for="image">imagen:</label>
            <input type="file" class="form-control" name="image" id="image" value="">
          </div>



          <button type="submit" name="">Guardar</button>

        </form>
      </div>
    </div>
  </div>
</div>


@endsection
