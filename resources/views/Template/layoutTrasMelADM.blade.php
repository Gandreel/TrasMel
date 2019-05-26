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
        <!-- HEADER MOBILE-->
            <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            </header>
            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{ asset('Admin/images/icon/logo.png') }}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li><a href="{{ url('/adm') }}"><i class="fas fa-archive"></i>Inicio</a></li>
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>Cuenta</a></i>
                            <ul class=" navbar__sub-list js-sub-list">
                                <li><a href="index.html">Editar</a></li>
                                <li><a href="index2.html">Configuracion</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/Personal') }}"><i class="fas fa-users"></i>Personal</a></li>
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
    <script src="{{ asset('Admin/vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('Admin/js/main.js') }}"></script>

</body>

</html>
<!-- end document-->