@extends('layouts.default')

@section('estilos')
<link rel="stylesheet" href= "/css/contact.css">
@endsection

@section('contenido')
<div class="mapa">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52563.438528236045!2d-58.45603509521369!3d-34.5734283494439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb59c771eb933%3A0x6b3113b596d78c69!2sPalermo%2C+CABA!5e0!3m2!1ses-419!2sar!4v1556904085528!5m2!1ses-419!2sar" width="100%" height="531px" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div class="contact">
  <div class="container">
    <div class="form_title">
      COMUNICATE CON NOSOTROS
    </div>
    <div class="form_content">
      <form class="" action="" method="post">
        <div class="inputs">
          <input type="text" class="form_input" placeholder="Nombre" required>
            <input type="email" class="form_input" placeholder="E-mail" required>
              <input type="text" class="form_input" placeholder="Asunto">
        </div>
        <textarea  class="form_text"name="form_text" rows="8" cols="80" placeholder="Mensaje"></textarea>
        <button class="form_button" type="submit" name="button">ENVIAR</button>
      </form>
    </div>
  </div>
</div>
@endsection
