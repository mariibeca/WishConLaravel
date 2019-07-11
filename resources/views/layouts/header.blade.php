<!-- Header -->

<style media="screen">
  #text {
    margin: 20px;
  }
  .dropdown-toggle img {
    list-style-type: none;
    width: 26px;
    height: 24px;
    float:none;
    margin-right: 2px;
    border-radius: 50%;
  }
  .dropdown li  {
    margin-top: 0px;
  }
  .search-box {
    width: 50%;
  }
  #carouselExampleControls {
    margin-top: 0px;
  }
  .dropdown-menu {
    background-color: black;
  }
  .shopping ul li {
    width: 28px;
  }
  .login-registro a {
    text-decoration: none;
  }
  .login-registro a:hover {
    color:#007bff;
  }
  .shopping a {
    text-decoration: none;
  }

</style>

<header class="header">
  <div class="logo"><a href="index">Wish</a></div>
			<nav class="main_nav">
				<ul>
					<li><a href="ropa">ROPA</a></li>
					<li><a href="accesorios">ACCESORIOS</a></li>
					<li><a href="contacto">CONTACTO</a></li>
				</ul>
			</nav>
      <div class="search-box">
        <input type="search" name="" value="" class="search_input">
        <button type="submit" name="button" id="search_button">
            <i class="fas fa-search"></i>
        </button>
      </div>
      <div class="login-registro">
      @if (Auth::guest())

        <ul>
          <li><i class="fas fa-unlock"></i></li>
          <li><a href="{{ url('/login') }}">Login</a></li>
          <li><i class="fas fa-user"></i></li>
          <li><a href="{{ url('/register') }}">Registrarse</a></li>
        </ul>
        @else
        <ul>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <img src="storage/{{ Auth::user()->avatar }}" alt="">
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>Profile</a></li>
            <li><a href="#" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
          </ul>
        </li>
      </ul>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      @endif
      </div>
      <div class="shopping">
        <ul>
          <li><a href="/carrito"><i class="fas fa-shopping-cart"></i>({{ \App\Cart::count() }})</a></li>
          <li><a href="#"><i class="far fa-heart"></i></a></li>
        </ul>
      </div>
   <label class="hamb" for="toggle">&#9776;</label>
   <input type="checkbox" id="toggle">
  <div class="nuevo_menu">
    <a href="ropa">ROPA</a>
    <a href="accesorios">ACCESORIOS</a>
    <a href="contacto">CONTACTO</a>
    <a href="login">LOGIN</a>
    <a href="registro">REGISTRARSE</a>

  </div>
</header>
