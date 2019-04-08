<!DOCTYPE html>
<html>
<head>
	<title>TrasMel</title>
 
 <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

            
</head>
<body style="background: #6c4675">
	
<!-- Barra Superior -->		
<div class="container-fluid">
<nav class="navbar-fixed">
    <div class="nav-wrapper" ><!-- style="background: #26004D" -->
    	<div class="row">
    		<div class="col s12 m4 l2">
      			<a href="{{ url('TrasMel') }}" class="brand-logo">TrasMel</a>
      		</div>
      		<div class="col s12 m4 l8">
      			<ul class="tabs tabs-transparent">
        			<li class="tab"><a href="#test1">Test 1</a></li>
        			<li class="tab"><a class="active" href="#test2">Test 2</a></li>
        			<li class="tab"><a href="#test3">Test 3</a></li>
        			<li class="tab"><a href="#test4">Test 4</a></li>
    		</div>
      		<div class="col s12 m4 l2" align="right">
      			Hola Miundo
      		</div>
    	</div>
    </div>
</nav>
</div>

<!--  Carusel -->
<div>
		
</div>

<!-- Compiled and minified JavaScript -->
<script src="{{ asset('materialize.min.js') }}"></script>
</body>
</html>