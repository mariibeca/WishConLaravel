
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<form class="" action="" method="post" enctype="multipart/form-data">
  {{$errors}}
 @csrf
<div class="form-group">
 <label for="name">Nombre:</label>
 @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
 <input class="" type="text" name="name" id="name"value="{{old("name")}}">

</div>

<div class="form-group">
 <label for="price">Precio:</label>
 <input type="number" name="price" id="price" value="{{old("price")}}">
</div>

<div class="form-group">
 <label for="category">Categoria:</label>
 <select name="category_id">
   <option value="">Seleccione</option>
 @foreach($categorias as $categoria)
   <option value="{{$categoria->id}}">{{$categoria->name}}</option>
   @endforeach
</select>
</div>

<div class="form-group">
 <label for="description">Descripcion:</label>
 <input type="text" name="desc" id="desc" value="">
 </div>

<div class="form-group">
 <label for="image">Imagen:</label>
 <input type="file" name="image" id="image" value="">
 </div>

<button type="submit" name="">Guardar</button>
<a href="/admin/products" class="btn btn-primary"><button type="button" name="">Volver</button></a>

</form>
