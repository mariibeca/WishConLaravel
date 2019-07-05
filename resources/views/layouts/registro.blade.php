@extends('layouts.default')
@section('estilos')
<link rel="stylesheet" href="/css/registro.css">
@endsection
@section('contenido')
<?php
  //require_once("validator.php");
  //require('conexion.php');

  $warning = [];

  $sinErrores = true;
  $nombreOK = "";
  $apellidoOK = "";
  $emailOK = "";
  $passOK= "";
  $errorFoto="";

  if ($_POST){
    $warning = validator();
    if(count($warning)== 0){
      $nombreOK = $_POST["nombre"];
      $apellidoOK = $_POST["apellido"];
      $emailOK = $_POST["email"];
      $passOK = password_hash($_POST['password'], PASSWORD_DEFAULT);
      ;

      $usuario=[
        "email"=> $emailOK,
        "pass"=> $passOK,
      ];
      }
        $nombreOK = trim($_POST['nombre']);
        $emailOK = trim($_POST['email']);
        $passOK = trim(password_hash($_POST['password'], PASSWORD_DEFAULT));

        $query = $conex->prepare("INSERT INTO usuarios (nombre, email, password) VALUES (:nombre, :mail, :clave)");
        $query->bindValue(':nombre', $nombreOK);
        $query->bindValue(':mail', $emailOK);
        $query->bindValue(':clave', $passOK);
        $query->execute();
        header("location:home.php");exit;

  }


 ?>

  <!--Agregue Brs porque si no se superponia hay que corregir con CSS-->
  <br>
  <br>
  <br>

  <!--REGISTRO YA VALIDADO-->
 <br>
 <br>
 <br>
 <br>

 <div class="caja-registro">
   <h1>Registrate</h1>
     <form class="" action="home" method="POST" enctype="multipart/form-data">
       <div class="texto-registro">
         <label for="nombre"></label>
         <input id="nombre" type="text" name="nombre" value="<?=$nombreOK?>" placeholder="Nombre">
         <?php if(isset($warning["nombre"])): ?>
           <p style="color:red;font-size:11px;"><?=$warning["nombre"]?></p>
         <?php endif; ?>
       </div>
       <div class="texto-registro">
         <label for="apellido"></label>
         <input id="apellido" type="text" name="apellido" value="<?=$apellidoOK?>" placeholder="Apellido">
         <?php if(isset($warning["apellido"])): ?>
           <p style="color:red;font-size:11px;"><?=$warning["apellido"]?></p>
         <?php endif; ?>
       </div>
       <div class="texto-registro">
         <label for="email"></label>
         <input id="email" type="text" name="email" value="<?=$emailOK?>" placeholder="Email">
         <?php if(isset($warning["email"])): ?>
           <p style="color:red;font-size:11px;"><?=$warning["email"]?></p>
         <?php endif; ?>
       </div>
       <div class="texto-registro">
         <label for="password"></label>
         <input id="password" type="password" name="password" value="" placeholder="Contraseña">
         <?php if(isset($warning["password"])): ?>
           <p style="color:red;font-size:11px;"><?=$warning["password"]?></p>
         <?php endif; ?>
       </div>
       <div class="texto-registro">
         <label for="foto">Mi foto de perfil</label>
         <input type="file" name="foto" value="foto">
         <?php if(isset($warning["foto"])): ?>
           <p style="color:red;font-size:11px;"><?=$warning["foto"]?></p>
         <?php endif; ?>
       </div>
       <div class="texto-checkbox">
         <input id=mailing type="checkbox" name="mailing" value="si">
         <label for="mailing">Quiero que me envien ofertas por mail!</label>
       </div>
       <div class="admin-checkbox">
         <input type="checkbox" name="admin" value="si">
         <label for="">Es Admin</label>
       </div>
     <div class="buton_registro">
       <button type="submit" name="button">REGISTRAME</button>
     </div>
 </form>
 </div>
@endsection
