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
  <form action="#" method="post" enctype="application/x-www-form-urlencoded">
      <input type="text" required title="Username required" placeholder="E-Mail" data-icon="U" name="user">
        <input type="password" required title="Password required" placeholder="Contraseña" data-icon="x" name="pass">
        <div class="olvido">
          <div class="col"><a href="#" title="Ver Carásteres">Ingresar</a></div>
            <div class="col"><a href="#" title="Recuperar Password">Terminos y condiciones</a></div>
        </div>
        <a href="#" class="enviar">Ingresar</a>
    </form>
</section>

@endsection