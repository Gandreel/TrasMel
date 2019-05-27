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
  <div class="titulo">Registrar</div>
  <form action="{{ url('Login')}}" method="post" enctype="multipart/form-data">

      <input type="text" required title="Username required" placeholder="E-Mail" data-icon="U" name="correo">
        <input type="password" required title="Password required" placeholder="Contraseña" data-icon="x" name="pass">
        <input type="password" required title="Password required" placeholder="Confirmar Contraseña" data-icon="x" name="confirmar">
        <div class="col">
                @if($mensaje != null)
                <label class="alert alert-warning">{{$mensaje}}</label>
                @endif
        </div>
        <div class="olvido">
          <div class="col"><a href="#" title="Ver Carásteres">Ingresar</a></div>
            <div class="col"><a href="#" title="Recuperar Password">Terminos y condiciones</a></div>
        </div>

        <input type="submit" value="Registrar" class="enviar">
        @csrf
    </form>
</section>

@endsection
