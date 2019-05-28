@extends('layouts.default')
@section('estilos')
<link rel="stylesheet" href="/css/accesorios.css">
@endsection
@section('contenido')

  <div class="container">
  
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
