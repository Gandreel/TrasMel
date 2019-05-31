@extends('Template.layoutTrasMel2')
@section('Contenido')

<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<br>
			<br>
			<h2>Seguimiento por GPS</h2>
			<form class="newsletter-form">
				<input type="text" placeholder="NUMERO DE ENCARGO">
				<button class="site-btn">Buscar <img src="{{ asset('Home/img/icons/double-arrow.png') }}" alt="#"/></button>
			</form>
		</div>
	</section>
	<!-- Newsletter section end -->

	<!-- Contact page -->
	<section class="contact-page">
		<div class="container">
			<div data-role="page" id="mapPage">
				<div role="main" class="ui-content">
					<div id="map-canvas">map-canvas</div>
				</div><!-- /content -->
			</div>
			<div class="col-lg-7 order-2 order-lg-1">
			</div>
			<div class="col-lg-5 order-1 order-lg-2 contact-text text-white">

			</div>
		</div>
	</div>
</section>
	<!-- Contact page end-->
