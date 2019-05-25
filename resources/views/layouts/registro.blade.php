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
     <form class="" action="registro.php" method="POST" enctype="multipart/form-data">
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
         <label for="pais">Vivo en:</label>
         <select class="" name="pais" id="pais">
           <?php if (isset($_POST["pais"]) && $_POST["pais"] == "ar") : ?>
             <option value="ar" selected >Argentina</option>
           <?php else : ?>
             <option value="ar">Argentina</option>
           <?php endif; ?>
           <?php if (isset($_POST["pais"]) && $_POST["pais"] == "br") : ?>
             <option value="br" selected >Brasil</option>
           <?php else : ?>
             <option value="br">Brasil</option>
           <?php endif; ?>
           <?php if (isset($_POST["pais"]) && $_POST["pais"] == "bo") : ?>
             <option value="bo" selected >Bolivia</option>
           <?php else : ?>
             <option value="bo">Bolivia</option>
           <?php endif; ?>
           <?php if (isset($_POST["pais"]) && $_POST["pais"] == "ch") : ?>
             <option value="ch" selected >Chile</option>
           <?php else : ?>
             <option value="ch">Chile</option>
           <?php endif; ?>
           <?php if (isset($_POST["pais"]) && $_POST["pais"] == "cl") : ?>
             <option value="cl" selected >Colombia</option>
           <?php else : ?>
             <option value="cl">Colombia</option>
           <?php endif; ?>
           <?php if (isset($_POST["pais"]) && $_POST["pais"] == "ec") : ?>
             <option value="ec" selected >Ecuador</option>
           <?php else : ?>
             <option value="ec">Ecuador</option>
           <?php endif; ?>
           <?php if (isset($_POST["pais"]) && $_POST["pais"] == "py") : ?>
             <option value="py" selected >Paraguay</option>
           <?php else : ?>
             <option value="py">Paraguay</option>
           <?php endif; ?>
           <?php if (isset($_POST["pais"]) && $_POST["pais"] == "pe") : ?>
             <option value="pe" selected >Peru</option>
           <?php else : ?>
             <option value="pe">Peru</option>
           <?php endif; ?>
           <?php if (isset($_POST["pais"]) && $_POST["pais"] == "uy") : ?>
             <option value="uy" selected >Uruguay</option>
           <?php else : ?>
             <option value="uy">Uruguay</option>
           <?php endif; ?>
           <?php if (isset($_POST["pais"]) && $_POST["pais"] == "ot") : ?>
             <option value="ot" selected >Otro</option>
           <?php else : ?>
             <option value="ot">Otro</option>
           <?php endif; ?>
         </select>
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
     <div class="buton_registro">
       <button type="submit" name="button">REGISTRAME</button>
     </div>
 </form>
 </div>
@endsection
