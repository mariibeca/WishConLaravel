@extends('layouts.default')
@section('estilos')

<link rel="stylesheet" href= "/css/login.css">

@endsection

@section('contenido')

<!-- CODIGO NUESTRO -->

<div class="super_container">
<div class="contenedor-login">
   <div class="caja-login">
     <form action="{{ route('login') }}" method="POST">
         @csrf
     <h2>¡A comprar!</h2>
     <div class="texto-login">
       <!-- //form-control -->
       <input id="email" class=" @error('email') is-invalid @enderror" type="email" placeholder="Tu email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
       @error('email')
           <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
           </span>
       @enderror
     </div>

     <div class="texto-login">
       <input id="password" type="password" class="@error('password') is-invalid @enderror" placeholder="Contraseña" name="password" required autocomplete="current-password">
       @error('password')
           <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
           </span>
       @enderror
     </div>

     <div class="texto-checkbox">
       <br>
     <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><label class="" for="remember">{{ __('Recor') }}</label>
     </div>

     <div class="">
       <button type="submit" class="btn btn-link">
           {{ __('Login') }}
       </button>
   @if (Route::has('password.request'))
       <a class="btn btn-link" href="{{ route('password.request') }}">
           {{ __('¿Olvidaste tu contraseña?') }}
       </a>
   @endif
   </div>

 </div>

</div>

</div>

</form>



@endsection
