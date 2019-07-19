@extends('layouts.default')

@section('estilos')
<link rel="stylesheet" href= "/css/products.css">
<style media="screen">
.cambiar {
  font-size: 21px;
}
.btn-primary {
  margin-bottom: 15px;
}
.btn-primary a {
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
          <img src="/storage/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;" alt="">
          <h2>Editar Perfil</h2>
          <div class="">

            <form enctype="multipart/form-data" action="/profile/edit/" method="POST">
              <div class="cambiar">
                <label for="avatar">Cambiar Avatar:</label>
                <input type="file" name="avatar" id="avatar" value="">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
              </div>
              <div class="">
                <a href="/profile"><button class="btn btn-primary" type="button" name="button">Volver</button></a>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>

</div>

</div>




@endsection
