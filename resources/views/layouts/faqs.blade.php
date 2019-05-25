@extends('layouts.default')
@section('estilos')
<link rel="stylesheet" href="/css/faqs.css">
@endsection
@section('contenido')


<!--FAQS -->

<h3>Preguntas Frecuentes</h3>
<div class="accordion" id="accordionExample">
  <div class="row">
    <div class="col-md-6 col-sm-12 col-xs-12">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              ¿Qué es Wish?
            </button>
          </h2>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            Wish es tu lugar para comprar ropa, es fácil, rápido y tenés un montón de opciones disponibles.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              ¿Cómo me registro?
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            Super fácil, <a href="registro.php">hace clic acá</a> y completá el formulario.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              ¿Hay un límite de compra?
            </button>
          </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            No, podés comprar la cantidad de productos que desees y las veces que quieras.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingFour">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              ¿Hacen envíos a todo el país?
            </button>
          </h2>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
          <div class="card-body">
            Si! Podés hacer tu compra desde cualquier punto de la Argentina y lo enviaremos. En el proceso de compra podrás calcular el costo del envío.
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12 col-xs-12">
      <div class="card">
        <div class="card-header" id="headingFive">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              ¿Cuánto demora el envío?
            </button>
          </h2>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
          <div class="card-body">
            Dependiendo del lugar donde te encuentres el envío puede demorar entre 24 y 72 hrs hábiles.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingSix">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              ¿Cuáles son los medios de pago?
            </button>
          </h2>
        </div>
        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
          <div class="card-body">
            Podés comprar online con tarjetas de crédito VISA, Mastercard, American Express, Naranja y UALA
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingSeven">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
              ¿Cuál es la política de devoluciones?
            </button>
          </h2>
        </div>
        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
          <div class="card-body">
            Tenés hasta 5 días para probar el producto, una vez que lo recibiste. Si te arrepentis de la compra o deseas cambiarlo, simplemente envianos el producto en el mismo empaquetado en el que lo recibiste.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingEight">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
              Necesito ayuda ¿Cómo los contacto?
            </button>
          </h2>
        </div>
        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
          <div class="card-body">
            Si no respondimos tu consulta, por favor, <a href="contacto.html">contactanos aquí</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
