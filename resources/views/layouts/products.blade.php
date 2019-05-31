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
 <select name="category">
   <option value="value1">Value 1</option>
   <option value="value2">Value 2</option>
   <option value="value3">Value 3</option>
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