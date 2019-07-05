
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <img src="storage/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;" alt="">
      <h2>{{ $user->name }}' Profile</h2>
      <a class="btn btn-success" href="/profile/edit"><button type="button" name="button">Editar Perfil</button></a>
      <a class="btn btn-success" href="/"><button type="button" name="button">Volver</button></a>
    </div>
  </div>
</div>
