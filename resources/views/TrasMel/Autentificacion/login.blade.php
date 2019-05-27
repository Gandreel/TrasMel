@extends('Template.layoutTrasMel3')
@section('Contenido')

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<br>
			<br>
		</div>
	</div>
</div>

<section class="login">
	<div class="titulo">Ingresar</div>
	<form action="{{ url('Perfil') }}" method="post" enctype="application/x-www-form-urlencoded">
    	<input type="text" required title="Username required" placeholder="E-Mail" data-icon="U" name="correo">
        <input type="password" required title="Password required" placeholder="Contraseña" data-icon="x" name="pass">
        <div class="col">
                @if($mensaje != null)
                <label class="alert alert-warning">{{$mensaje}}</label>
                @endif
        </div>
        <div class="olvido">
        	<div class="col"><a href="#" title="Ver Carásteres">Registarse</a></div>
            <div class="col"><a href="#" title="Recuperar Password">Recuperar Contraseña</a></div>
        </div>
        <input type="submit" value="Acceder" class="enviar">
        @csrf
    </form>
</section>

@endsection
