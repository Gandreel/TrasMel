@extends('Template.layoutTrasMel')
@section('Contenido')

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="intro-text-box text-box text-white">
				<div class="top-meta">24/05/2019  / <a href="">Noticias</a></div>
				<h3>Trasmel Lanza su Aplicacion Movil</h3>
				<p>Durante la feria de desarrollo e innovación, la empresa TrasMel...</p>
				<a href="{{ url('AppMovil') }}" class="read-more">Read More  <img src="{{ asset('Home/img/icons/double-arrow.png') }}" alt="#"/></a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="intro-text-box text-box text-white">
				<div class="top-meta">20/03/2019  / <a href="">Noticias</a></div>
				<h3>TrasMel anuncia que está desarrollando una Aplicación Movil</h3>
				<p>Durante una entrevista al gerente de la empresa TrasMel, Alexander Maldonado, nos ha anunciado que su equipo de desarrollo informatico está creando...</p>
				<a href="{{ url('Anuncio') }}" class="read-more">Sigue Leyendo  <img src="{{ asset('Home/img/icons/double-arrow.png') }}" alt="#"/></a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="intro-text-box text-box text-white">
				<div class="top-meta">03/03/2019  / <a href="">Noticias</a></div>
				<h3>Se presenta una nueva Empresa</h3>
				<p>Durante la feria de innovación hecha dentro del establecimiento educacional, DuocUC, especificamente en la sede de Viña del Mar, se presentó la nueva empresa llamada...</p>
				<a href="{{ url('Empresa') }}" class="read-more">Sigue Leyendo  <img src="{{ asset('Home/img/icons/double-arrow.png') }}" alt="#"/></a>
			</div>
		</div>
	</div>
</div>
@endsection
