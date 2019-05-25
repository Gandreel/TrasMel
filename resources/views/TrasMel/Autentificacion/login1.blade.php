<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="shortcut icon"/>


    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}"/>

    <!--registro-->
    <link href="{{asset('css/log.css')}}" rel="stylesheet" type="text/css" media="all" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>



</head>
<body>

<header class="header-section">
                <div class="header-warp">

                  <div class="header-bar-warp d-flex">
                    <!-- site logo -->
                    <a href="home.html" class="site-logo">
                      <img src="{{ asset('/img/logo.png') }}" alt="TrasMel">
                    </a>
                    <nav class="top-nav-area w-100">
                      <div class="user-panel">
                        <a href="{{ url('Registro') }}">Registrar</a></a>
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
        <h1>Login</h1>
        <div>
        @if($mensaje !=null)
        <div class="col-12">
          <div class="alert alert-success" role="alert">
            {{ $mensaje }}
          </div>
        </div>
        @endif
      </div>
        <form method="post">
            <input type="text" name="u" placeholder="Username" required="required" />
            <input type="password" name="p" placeholder="Password" required="required" />
            <button type="submit" class="btn btn-primary btn-block btn-large">Ingresar</button>
        </form>
    </div>
</body>
</html>