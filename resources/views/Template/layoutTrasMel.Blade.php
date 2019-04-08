<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
 
 	<!-- Materileze CSS -->
    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">            
</head>

<script>
	document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.slider').slider();
  });
</script>
<body>
	
<!-- Barra Superior -->		
<div class="container-fluid">
<nav class="nav-wrapper deep-purple darken-4">
    <div class="row">
    	<div class="col s2 m1 l2">
     		<!-- Logo -->
     		<a href="{{ url('TrasMel') }}" class="brand-logo">TrasMel</a>
      	</div>
      	<div class="col s8 m2 l8">
      		<!-- Menu -->
			<ul id="nav-mobile" class="hide-on-med-and-down">
        		<li><a href="sass.html">Home</a></li>
        		<li><a href="badges.html">--</a></li>
        		<li><a href="collapsible.html">---</a></li>
      		</ul>
    	</div>
      	<div class="col s2 m1 l2" align="right">
      		<!-- Sesion -->
      		<ul class="right hide-on-med-and-down">
      			<li>
      				<a href="#">
      					<i class="material-icons right">account_circle</i>
      					Ingresar
      				</a>
      			</li>
      		</ul>
      	</div>
    </div>
</nav>
</div>

<!-- Contenido -->
<br>
@yield('contenido')	
<br>
<!--Footer -->
<footer class="page-footer deep-purple darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">TrasMel</h5>
                <p class="grey-text text-lighten-4"></p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Redes Sociales</h5>
                <ul>
                  <li>
                  	<a class="grey-text text-lighten-3" href="#!"><i class="material-icons left">drafts</i>Facebook</a></li>
                  <li>
                  	<a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">--</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">--</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2019 TrasMel. Todos los derechos reservados.
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

<!-- Materileze JavaScript -->
<script src="{{ asset('materialize.min.js') }}"></script>
</body>
</html>