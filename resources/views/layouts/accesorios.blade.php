@extends('layouts.default')
@section('estilos')
<link rel="stylesheet" href="/css/accesorios.css">
@endsection
@section('contenido')

  <div class="container">
  <header class="header">
    <div class="logo"><a href="home.php">Wish</a></div>
  			<nav class="main_nav">
  				<ul>
  					<li><a href="ropa.php">ROPA</a></li>
  					<li><a href="accesorios.php">ACCESORIOS</a></li>
  					<li><a href="contact.php">CONTACTO</a></li>
  				</ul>
  			</nav>
        <div class="search-box">
          <input type="search" name="" value="" class="search_input">
          <button type="submit" name="button" id="search_button">
              <i class="fas fa-search"></i>
          </button>
        </div>
        <div class="login-registro">
          <ul>
            <li><i class="fas fa-unlock"></i></li>
            <li><a href="login.php">Login</a></li>
            <li><i class="fas fa-user"></i></li>
            <li><a href="registro.php">Registrarse</a></li>
          </ul>

        </div>
        <div class="shopping">
          <ul>
            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
            <li><a href="#"><i class="far fa-heart"></i></a></li>



      </ul>
    </div>
     <label class="hamb" for="toggle">&#9776;</label>
     <input type="checkbox" id="toggle">
    <div class="nuevo_menu">
      <a href="ropa.php">ROPA</a>
      <a href="accesorios.php">ACCESORIOS</a>
      <a href="contact.php">CONTACTO</a>
      <a href="login.php">LOGIN</a>
      <a href="registro.php">REGISTRARSE</a>

    </div>
  </header>
<!-- BODY -->
  <div class="accesorios">
  <div class="accesorios_content">
    <div class="row">
      <div class="col">
        <div class="accesorios_subtitle">WISH
        </div>
        <div class="accesorios_title"> ACCESORIOS
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="product col-md-4">
      <!--producto 1 -->
        <img width="100%"src="img/product_7.jpg" alt="lentes" id="promo">
      <div class="rating rating_4">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <div class="product_info">
        <div class="product_name"><a href="#">Lentes Fiji</a></div>
        <div class="product_price">$200</div>
      </div>
    </div>
    <!--producto 2 -->
      <div class="col-md-4">
        <img width="100%"src="img/product_9.jpg" alt="coronaflor" id="promo">
      <div class="rating rating_4">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <div class="product_info">
        <div class="product_name"><a href="#">Corona Bahamas</a></div>
        <div class="product_price">$150</div>
      </div>
    </div>
    <!--producto 3 -->
    <div class="product col-md-4 ">
        <img width="100%"src="img/product_3.jpg" alt="sombrero" id="promo">
      <div class="rating rating_4">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <div class="product_info">
        <div class="product_name"><a href="#">Sombrero Grecia</a></div>
        <div class="product_price">$300</div>
      </div>
    </div>
    </div>
    <div class="row">
      <div class="product col-md-4">
        <!--producto 4 -->
          <img width="100%" height="511px"src="img/product_image_1.jpg" alt="collar" id="promo">
        <div class="rating rating_4">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <div class="product_info">
          <div class="product_name"><a href="#">Collar Ivy</a></div>
          <div class="product_price">$100</div>
        </div>
      </div>
      <!--producto 5 -->
        <div class="col-md-4">
          <img width="100%"src="img/product_11.jpg" alt="aros" id="promo">
        <div class="rating rating_4">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <div class="product_info">
          <div class="product_name"><a href="#">Aros Kendall</a></div>
          <div class="product_price">$100</div>
        </div>
      </div>
      <!--producto 6 -->
      <div class="product col-md-4 ">
          <img width="100%"src="img/product_12.jpg" alt="anillos" id="promo">
        <div class="rating rating_4">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <div class="product_info">
          <div class="product_name"><a href="#">Anillos Roxie</a></div>
          <div class="product_price">$100</div>
        </div>
      </div>
      </div>
</div>
</div>
@endsection
