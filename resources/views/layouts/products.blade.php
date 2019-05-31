<form class="" action="" method="post">
 @csrf
<div class="form-group">
 <label for="name">Nombre:</label>
 @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
 <input class="form-control" type="text" name="name" id="name"value="{{old("name")}}">

</div>

<div class="form-group">
 <label for="price">Precio:</label>
 <input type="number" name="price" id="price" value="{{old("price")}}">
</div>

<div class="form-group">
 <label for="category">Categoria:</label>
 <select name="category_id">
 @foreach($categorias as $categoria)
   <option value="{{$categoria->id}}">{{$categoria->name}}</option>
   @endforeach
</select>
</div>

<div class="form-group">
 <label for="desc">Descripcion:</label>
 <input type="text" name="desc" id="desc" value="">
 </div>

<div class="form-group">
 <label for="img">Imagen:</label>
 <input type="file" name="img" id="img" value="">
 </div>

<button type="submit" name="">Guardar</button>

</form>