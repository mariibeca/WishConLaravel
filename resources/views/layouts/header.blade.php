<!-- Header -->
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
      @guest
      <div class="login-registro">
        <ul>
          <li><i class="fas fa-unlock"></i></li>
          <li><a href="login">Login</a></li>
          <li><i class="fas fa-user"></i></li>
          <li><a href="registro">Registrarse</a></li>
        </ul>
        @else
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>Profile</a></li>
            <li><a href="#" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
          </ul>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      @endguest
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
    <a href="ropa">ROPA</a>
    <a href="accesorios">ACCESORIOS</a>
    <a href="contacto">CONTACTO</a>
    <a href="login">LOGIN</a>
    <a href="registro">REGISTRARSE</a>

  </div>
</header>
