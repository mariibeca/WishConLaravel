@extends('layouts.default')
@section('estilos')
<link rel="stylesheet" href="/css/login.css">
@endsection
@section('contenido')

<?php
session_start();
//require_once("validator.php");

  //BORRADOR:
  $warning = [];

  if ($_POST){
    //$warning = validatorLogin();
    if (count($warning) == 0){

      //LOGUearlo

      $usuarioArchivo = file_get_contents("usuarios.json");
      $usuarioBD = json_decode ($usuarioArchivo, true);
      var_dump($usuarioBD);
      var_dump($_POST);


      if ($_POST["email"] == $usuarioBD["email"] && password_verify($_POST['pass'], $usuarioBD['pass'])){
        $_SESSION["email"] = $usuarioBD["email"];
        header("location:home.php");exit;
      }

    }
  }

 ?>
 <br>
 <br>
 <br>
 <div class="contenedor-login">
    <div class="caja-login">
      <form action="" method="POST">
      <h2>¡A comprar!</h2>
      <div class="texto-login">
        <input type="text" placeholder="Tu E-Mail" name="email" value="">
      </div>
      <div class="texto-login">
        <input type="password" placeholder="Contraseña" name="pass" value="">
      </div>
      <div class="texto-checkbox">
        <br>
      <input type="checkbox"><label>Recordarme</label>
      </div>
      <div class="">
      <input class="btn" type="submit" name="" value="Iniciar Sesión">
    </div>
    <div class="texto-login">
      <a href="#">¿Olvidaste tu contraseña?</a>
    </div>
  </div>
 </div>
 </form>
 @endsection
