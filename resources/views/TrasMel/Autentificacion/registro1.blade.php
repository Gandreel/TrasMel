<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Favicon -->
    <link href="{{ asset('Home/img/favicon.ico') }}" rel="shortcut icon"/>


    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('Home/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('Home/css/slicknav.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('Home/css/owl.carousel.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('Home/css/magnific-popup.css') }}"/>
    <link rel="stylesheet" href="{{ asset('Home/css/animate.css') }}"/>

    <!--registro-->
    <link href="{{asset('Home/css/log.css')}}" rel="stylesheet" type="text/css" media="all" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('Home/css/style.css') }}"/>

</head>
<body>
        <header class="header-section">
                <div class="header-warp">

                  <div class="header-bar-warp d-flex">
                    <!-- site logo -->
                    <a href="home.html" class="site-logo">
                      <img src="{{ asset('Home/img/logo.png') }}" alt="TrasMel">
                    </a>
                    <nav class="top-nav-area w-100">
                      <div class="user-panel">
                        <a href="{{ url('Login') }}">Ingresar</a></a>
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
                        <li><a href="{{ url('Contacto') }}">Contacto</a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </header>
              <!-- Header section end -->

    <div class="login">
        <h1>Registro</h1>
        <div>
            @if($mensaje !=null)
            <div class="col-12">
              <div class="alert alert-success" role="alert">
                {{ $mensaje }}
              </div>
            </div>
            @endif
          </div>
        <form action="{{URL::to('reg')}}" method="post" enctype="multipart/form-data">
            <input type="text" name="nick" placeholder="Nickname" required="required" />
            <input type="password" name="pass" placeholder="Password" required="required" />
            <input type="text" name="correo" placeholder="Email" required="required" />
            <input type="text" name="idPersona" placeholder="Rut" required="required" />
            <select  name="categoria" required="requided">
                <option value="">Seleccione...</option>
                <option value="Administrador">Administrador</option>
                <option value="Cliente" selected>Cliente</option>
                <option value="Trasportista">Transportista</option>
              </select>
            <input type="file" name="avatar" >


            <button type="submit" class="btn btn-primary btn-block btn-large">Registrar</button>
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        </form>
    </div>

   <!-- <footer class="footer-section">
            <div class="container">
              <a href="#" class="footer-logo">
                <img src="{{ asset('./img/logo.png') }}" alt="">
              </a>
              <ul class="main-menu footer-menu">
                <li><a href="">Inicio</a></li>
                <li><a href="">Servicios</a></li>
                <li><a href="">Opiniones</a></li>
                <li><a href="">Noticias</a></li>
                <li><a href="">Contacto</a></li>
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
          </footer>-->

</body>
</html>
