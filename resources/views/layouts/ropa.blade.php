@extends('layouts.default')

@section('estilos')
<link rel="stylesheet" href= "/css/ropa.css">
@endsection

@section('contenido')
    <!-- BODY -->

      <div class="ropa">
        <div class="ropa_content">
          <div class="row">
            <div class="col">
              <div class="ropa_subtitle">WISH
              </div>
              <div class="ropa_title"> ROPA
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="product col-md-4">
            <!--producto 1 -->
            <img src="img/product_1.jpg" alt="sweater" id="promo">
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
            <img src="img/product_2.jpg" alt="top" id="promo">
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
            <img src="img/product_3.jpg" alt="remera" id="promo">
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
        <div class="row">
          <div class="product col-md-4">
            <!--producto 4 -->
            <img src="img/product_5.jpg" alt="vestido" id="promo">
            <div class="rating rating_4">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <div class="product_info">
              <div class="product_name"><a href="#">Vestido Zara</a></div>
              <div class="product_price">$550</div>
            </div>
          </div>
          <!--producto 5 -->
          <div class="col-md-4">
            <img src="img/product_6.jpg" alt="jean" id="promo">
            <div class="rating rating_4">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <div class="product_info">
              <div class="product_name"><a href="#">Jean Amy</a></div>
              <div class="product_price">$750</div>
            </div>
          </div>
          <!--producto 6 -->
          <div class="product col-md-4 ">
            <img src="img/product_8.jpg" alt="pantalon" id="promo">
            <div class="rating rating_4">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <div class="product_info">
              <div class="product_name"><a href="#">Pantalon Louise</a></div>
              <div class="product_price">$700</div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
