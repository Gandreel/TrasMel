@extends('Template.layoutTrasMel2')
@section('Contenido')

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="{{ asset('img/page-top-bg/banner2.png') }}">
		<div class="page-info">
            <br><br><br><br><br>
			<div class="site-breadcrumb">
				<a href="{{ url('TrasMel') }}">Inicio</a>  /
				<span>Contacto</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->


	<!-- Contact page -->
	<section class="contact-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 order-2 order-lg-1">
					<form class="contact-form">
						<input type="text" placeholder="Nombre">
						<input type="text" placeholder="E-Mail">
						<input type="text" placeholder="Asunto">
						<textarea placeholder="Mensage"></textarea>
						<button class="site-btn">Enviar Mensaje<img src="{{ asset('img/icons/double-arrow.png') }}" alt="#"/></button>
					</form>
				</div>
				<div class="col-lg-5 order-1 order-lg-2 contact-text text-white">
					<h3>Contáctese con Nosotros</h3>
					<p>
					Estimado cliente, para realizar cualquier tipo de consulta respecto a nuestros servicios,
					cobertura, consulta de su encomienda o cualquier otra gestión, por favor indicar en asunto.
					</p>
					<div class="cont-info">
						<div class="ci-icon"><img src="{{ asset('img/icons/location.png') }}" alt=""></div>
						<div class="ci-text">Álvarez 2336, Viña del Mar, Valparaíso</div>
					</div>
					<div class="cont-info">
						<div class="ci-icon"><img src="{{ asset('img/icons/phone.png') }}" alt=""></div>
						<div class="ci-text">+569 87621595</div>
					</div>
					<div class="cont-info">
						<div class="ci-icon"><img src="{{ asset('img/icons/mail.png') }}" alt=""></div>
						<div class="ci-text">TrasMel@contactos.com</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact page end-->


	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<h2>Suscríbete para recibir nuestras últimas noticias</h2>
			<form class="newsletter-form">
				<input type="text" placeholder="Ingrese su E-Mail">
				<button class="site-btn">subscrir <img src="{{ asset('img/icons/double-arrow.png') }}" alt="#"/></button>
			</form>
		</div>
	</section>
	<!-- Newsletter section end -->

