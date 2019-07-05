
{{$errors}}
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <img src="/storage/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;" alt="">
      <h2>Editar Perfil</h2>
      <form enctype="multipart/form-data" action="/profile/edit/" method="POST">
        <div class="">
          <label for="avatar">Cambiar Avatar:</label>
          <input type="file" name="avatar" id="avatar" value="">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="submit" class="pull-right btn btn-sm btn-primary">
        </div>
        <div class="">
          <a href="/profile"><button type="button" name="button">Volver</button></a>
        </div>
      </form>
    </div>
  </div>
</div>
