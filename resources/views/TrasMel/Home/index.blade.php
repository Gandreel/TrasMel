@extends('Template.layoutTrasMel')
@section('Contenido')

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="intro-text-box text-box text-white">
				<div class="top-meta">16.05.2019  / <a href="">Noticias</a></div>
				<h3>The best online game is out now!</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida....</p>
				<a href="#" class="read-more">Read More  <img src="{{ asset('Home/img/icons/double-arrow.png') }}" alt="#"/></a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="intro-text-box text-box text-white">
				<div class="top-meta">11.11.18  / <a href="">Noticias</a></div>
				<h3>Top 5 best games in november</h3>
				<p>Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum  labore suspendisse ultrices gravida....</p>
				<a href="#" class="read-more">Sigue Leyendo  <img src="{{ asset('Home/img/icons/double-arrow.png') }}" alt="#"/></a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="intro-text-box text-box text-white">
				<div class="top-meta">11.11.18  / <a href="">Noticias</a></div>
				<h3>Get this game at a promo price</h3>
				<p>Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida ncididunt ut labore ....</p>
				<a href="#" class="read-more">Sigue Leyendo  <img src="{{ asset('Home/img/icons/double-arrow.png') }}" alt="#"/></a>
			</div>
		</div>
	</div>
</div>
@endsection
