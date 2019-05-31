<!DOCTYPE html>
<html>
<head>
  <title>TrasMel</title>
  <meta charset="UTF-8">
  <meta name="description" content="TrasMel">
  <meta name="keywords" content="TrasMel,Trasporte,Encargo">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link href="{{ asset('Home/img/favicon.ico') }}" rel="shortcut icon"/>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('Home/css/bootstrap.min.css') }}"/>
  <link rel="stylesheet" href="{{ asset('Home/css/font-awesome.min.css') }}"/>
  <link rel="stylesheet" href="{{ asset('Home/css/slicknav.min.css') }}"/>
  <link rel="stylesheet" href="{{ asset('Home/css/owl.carousel.min.css') }}"/>
  <link rel="stylesheet" href="{{ asset('Home/css/magnific-popup.css') }}"/>
  <link rel="stylesheet" href="{{ asset('Home/css/animate.css') }}"/>

  <!-- Main CSS -->
  <link rel="stylesheet" href="{{ asset('Home/css/style.css') }}"/>


</head>
<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Header section -->
  <header class="header-section">
    <div class="header-warp">

      <div class="header-bar-warp d-flex">
        <!-- site logo -->
        <a href="home.html" class="site-logo">
          <img src="{{ asset('Home/img/logo.png') }}" alt="TrasMel">
        </a>
        <nav class="top-nav-area w-100">
          <div class="user-panel">
            <a href="{{ url('Login') }}">Ingresar</a> / <a href="{{ url('Registro') }}">Registrarse</a>
          </div>
          <!-- Menu -->
          <ul class="main-menu primary-menu">
            <li><a href="{{ url('TrasMel') }}">Inicio</a></li>
            <li class="down">
              <a href="">Servicios</a>
              <ul class="sub-menu">
                <li><a href="{{ url('Seguimiento') }}">Seguimiento</a></li>
                <li><a href="game-single.html">TrasMel App</a></li>
              </ul>
            </li>
            <li><a href="review.html">Opiniones</a></li>
            <li><a href="{{ url('Noticias') }}">Noticias</a></li>
            <li class="down">
              <a href="">TrasMel</a>
              <ul class="sub-menu">
                <li><a href="{{ url('Contacto') }}">Contacto</a></li>
                <li><a href="{{ url('/TrasMel/Nosotros') }}">Nosotros</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <!-- Header section end -->
  @yield('Contenido')
  <!-- Intro section end -->



  <!-- Footer section -->
  <footer class="footer-section">
    <div class="container">
      <a href="#" class="footer-logo">
        <img src="{{ asset('Home/img/logo.png') }}" alt="">
      </a>
      <ul class="main-menu footer-menu">
        <li><a href="{{ url('TrasMel') }}">Inicio</a></li>
        <li><a href="{{ url('Seguimiento') }}">Servicios</a></li>
        <li><a href="">Opiniones</a></li>
        <li><a href="{{ url('Noticias') }}">Noticias</a></li>
        <li><a href="{{ url('Contacto') }}">Contacto</a></li>
      </ul>
      <div class="footer-social d-flex justify-content-center">
        <a href="#"><i class="fa fa-pinterest"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-behance"></i></a>
      </div>
      <div class="copyright"><a href="">TrasMel</a> 2019 @ All rights reserved</div>
    </div>
  </footer>
  <!-- Footer section end -->

  <!--====== Javascripts & Jquery ======-->
  <script src="{{ asset('Home/js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('Home/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('Home/js/jquery.slicknav.min.js') }}"></script>
  <script src="{{ asset('Home/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('Home/js/jquery.sticky-sidebar.min.js') }}"></script>
  <script src="{{ asset('Home/js/jquery.magnific-popup.min.js') }}"></script>

  <script src="{{ asset('Home/js/main.js') }}"></script>
  <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDezorD_ygecOQATqjEMrnG5BBl2JE_coc"></script>
  <script src="{{ asset('Admin/js/geo.js') }}"></script>
  </body>
</html>
