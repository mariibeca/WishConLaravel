@foreach($productos as $producto)
   <li value="{{$producto->id}}">{{$producto->name}}</li>
   @endforeach