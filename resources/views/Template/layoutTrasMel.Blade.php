<!DOCTYPE html>
<html>
<head>
	<title>TrasMel</title>

	<!-- Materilezed CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="Container-fluid">
	
	<!-- Barra Superior -->		
	<nav class="navbar" style="background: #56385e; position: absolute;">
		<div class="col-md-3">
			<a href="#!" class="">TrasMel</a>
		</div>
		<div class="col-md-7">
		<ul id="nav-mobile" class="left hide-on-med-and-down">
        	<li><a href="#">Sass</a></li>
        	<li><a href="#">Components</a></li>
        	<li><a href="#">JavaScript</a></li>
     	</ul>
		</div>
		<div class="col-md-2">
			Holi mUndo
		</div>
	</nav>

<!--  Carusel -->
	<div class="carousel carousel-slider center">
    	<div class="carousel-fixed-item center">
      	<a class="btn waves-effect white grey-text darken-text-2">button</a>
    	</div>
    	<div class="carousel-item red white-text" href="{{ asset('img/cc-01.jpg') }}">
      		<h2>First Panel</h2>
      		<p class="white-text">This is your first panel</p>
    	</div>
    	<div class="carousel-item amber white-text" href="{{ asset('img/cc-01.jpg') }}">
      		<h2>Second Panel</h2>
      		<p class="white-text">This is your second panel</p>
    	</div>
    	<div class="carousel-item green white-text" href="{{ asset('img/cc-01.jpg') }}">
      		<h2>Third Panel</h2>
      		<p class="white-text">This is your third panel</p>
    	</div>
    	<div class="carousel-item blue white-text" href="{{ asset('img/cc-01.jpg') }}">
      		<h2>Fourth Panel</h2>
      		<p class="white-text">This is your fourth panel</p>
    	</div>
  	</div>

</div>
<!-- Materialized Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<!-- Boostrap Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>