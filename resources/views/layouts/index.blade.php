@extends('layouts.default')

@section('estilos')
<link rel="stylesheet" href= "/css/home.css">
@endsection

@section('contenido')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="/products"><img src="img/home_slider_1.jpg" class="d-block w-100" alt= "home_slider_1"></a>
    </div>
    <div class="carousel-item">
      <a href="/products"><img src="img/home_slider_1.jpg" class="d-block w-100" alt="img/home_slider_1"></a>
    </div>
    <div class="carousel-item">
      <a href="/products"><img src="img/home_slider_1.jpg" class="d-block w-100" alt="img/home_slider_1"></a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <div class="home_slider_content">
    <a href="/products"><div class="home_slider_subtitle">Promociones</div></a>
    <a href="/products"><div class="home_slider_title">Nueva Colección</div></a>
  </div>
</div>
<div class="container">
  <!-- PROMO -->
  <div class="promo">
    <div class="promo_content">
      <div class="promo_content_subtitle">
        LAS MEJORES
      </div>
      <div class="promo_content_title">
        PROMOS
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-sm-6 col-md-4">
        <div class="promo_item">
          <div class="promo_image">
            <a href="/accesorios"><img src="img/promo_1.jpg" alt="pollera-rosa" id="promo"></a>
              <div class="promo_image_content promo_image_content_1">
                <a href="/accesorios"><div class="promo_image_title">-30% off</div></a>
                <div class="promo_image_subtitle">
                  EN CARTERAS
                </div>
              </div>
          </div>
          <div class="promo_link">
            <a href="/accesorios">VER PRODUCTO</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4">
        <div class="promo_item">
          <div class="promo_image">
            <a href="/accesorios"><img src="img/promo_2.jpg" alt="saco-marron" id="promo"></a>
            <div class="promo_image_content promo_image_content_2">
              <div class="promo_image_title">
                -30% off
              </div>
              <div class="promo_image_subtitle">
                EN ABRIGOS Y SACOS
              </div>
            </div>
          </div>
          <div class="promo_link">
            <a href="/accesorios">VER PRODUCTO</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4">
        <div class="promo_item">
          <div class="promo_image">
            <a href="/accesorios"><img src="img/promo_3.jpg" alt="zapatos" id="promo"></a>
            <div class="promo_image_content promo_image_content_3">
              <div class="promo_image_title">
                -25% off
              </div>
              <div class="promo_image_subtitle">
                en Zapatos
              </div>
            </div>
          </div>
          <div class="promo_link">
            <a href="/accesorios">VER PRODUCTO</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--NEW ARRIVALS -->
  <div class="arrivals">
    <div class="arrival_content">
      <div class="row">
        <div class="col">
          <div class="arrivals_subtitle">SOLO
          </div>
          <div class="arrivals_title"> LO NUEVO
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="product col-md-4">
        <!--producto 1 -->
          <a href="/products"><img src="img/product_1.jpg" alt="sweater" id="promo"></a>
        <div class="rating rating_4">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <div class="product_info">
          <div class="product_name"><a href="#">Sweater Ares</a></div>
          <div class="product_price">$600</div>
        </div>
      </div>
      <!--producto 2 -->
        <div class="col-md-4">
          <a href="/products"><img src="img/product_2.jpg" alt="top" id="promo"></a>
        <div class="rating rating_4">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <div class="product_info">
          <div class="product_name"><a href="#">Top Bahamas</a></div>
          <div class="product_price">$350</div>
        </div>
      </div>
      <!--producto 3 -->
      <div class="product col-md-4 ">
          <a href="/produts"><img src="img/product_3.jpg" alt="remera" id="promo"></a>
        <div class="rating rating_4">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <div class="product_info">
          <div class="product_name"><a href="#">Remera Nashira</a></div>
          <div class="product_price">$400</div>
        </div>
      </div>
      </div>
  </div>
</div>

<!--NEWSLETTER -->
<div class="newsletter">
    <div class="newsletter_image">
      <img src="img/newsletter.jpg" alt="fondo">
    </div>
    <div class="newsletter-content">
      <div class="row">
        <div class="col">
          <div class="newsletter_title_container">
            <div class="newsletter_subtitle">SOLO LO MEJOR</div>
            <div class="newsletter_title">SUSCRIBITE Y OBTENE 20% DE DESCUENTO</div>
          </div>
        </div>
      </div>
      <div class="row newsletter_container">
        <div class="col">
          <div class="newsletter_form_container">
            <form action="#">
              <input type="email" class="newsletter_input" required="required" placeholder="E-mail">
              <button type="submit" class="newsletter_button">SUSCRIBITE</button>
            </form>
          </div>
          <div class="newsletter_text">Para saber sobre actualizaciones exclusivas, nuevas colecciones, eventos, contenidos, promociones y más! Suscribite ahora y obtene 20% de descuento.
            <br> (No acumulable con otras promociones) </div>
        </div>
      </div>
    </div>
</div>

</div>

@endsection
