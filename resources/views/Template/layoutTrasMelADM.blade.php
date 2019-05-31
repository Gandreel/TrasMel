<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="description" content="TrasMel">
  <meta name="keywords" content="TrasMel,Trasporte,Encargo">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <!-- Title Page-->
  <title>TrasMel ADM</title>

  <!-- Fontfaces CSS-->
  <link href="{{ asset('Admin/css/font-face.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('Admin/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('Admin/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('Admin/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
  <link href="{{ asset('Admin/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

  <!-- Vendor CSS-->
  <link href="{{ asset('Admin/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('Admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('Admin/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('Admin/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('Admin/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('Admin/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('Admin/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

  <!-- Main CSS-->
  <link href="{{ asset('Admin/css/theme.css') }}" rel="stylesheet" media="all">
</head>

<body class="animsition">
    <div class="page-wrapper">
            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar d-none d-lg-block">
                <div class="logo">
                    <a href="#">
                        <img src="{{ asset('Admin/images/icon/logo.png') }}" alt="Cool Admin" >
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">
                            <li><a href="{{ url('/adm') }}"><i class="fas fa-home"></i>Inicio</a></li>
                            <li class="active has-sub">
                                <a class="js-arrow" href="#"><i class="fas fa-user"></i>Cuenta</a>
                                <ul class=" navbar__sub-list js-sub-list">
                                    <li><a href="">Editar Perfil</a></li>
                                    <li><a href="">Editar Empresa</a></li>
                                    <li><a href="">Configuracion</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/Personal') }}"><i class="fas fa-users"></i>Personal</a></li>
                            <li><a href=""><i class="fas fa-th-list"></i>Operaciones</a></li>
                            <li class="active has-sub">
                                <a class="js-arrow" href="#"><i class="fas fa-chart-line"></i>Estadisticas</a>
                                <ul class=" navbar__sub-list js-sub-list">
                                    <li><a href="">Informes</a></li>
                                    <li><a href="">Graficos</a></li>
                                    <li><a href="">Otros</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->

            <!-- PAGE CONTAINER-->
            <div class="page-container">           
                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            @yield('Contenido')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="copyright">
                                        <p>Copyright © 2019 TrasMel. Todos los Derechos Reservados.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END MAIN CONTENT-->
                </div>
            </div>
    <!-- Jquery JS-->
    <script src="{{ asset('Admin/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('Admin/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('Admin/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('Admin/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('Admin/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('Admin/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('Admin/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/select2/select2.min.js') }}"></script>
    <script src="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    <!-- Api Google-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDezorD_ygecOQATqjEMrnG5BBl2JE_coc"></script>
    <!-- Main JS-->
    <script src="{{ asset('Admin/js/main.js') }}"></script>
    <script src="{{ asset('Admin/js/geo.js') }}"></script>

</body>

</html>
<!-- end document-->