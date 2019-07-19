@extends('layouts.default')

@section('estilos')
<link rel="stylesheet" href= "/css/products.css">
<style media="screen">
.btn-success {
    margin-right: 5px;
}
.btn-success a {
  color: white;
}
</style>
@endsection

@section('contenido')
<div class="ropa">
  <div class="ropa_content">
    <div class="row">
      <div class="col">
        <div class="ropa_subtitle">
        </div>
        <div class="ropa_title">
          <img src="storage/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;" alt="">
          <h2>{{ $user->name }}' Profile</h2>
          <a  href="/profile/edit"><button class="btn btn-success" type="button" name="button">Editar Perfil</button></a>
          <a  href="/"><button class="btn btn-success" type="button" name="button">Volver</button></a>

        </div>
      </div>
    </div>
  </div>

</div>

</div>
  @endsection
