@extends('Template.layoutTrasMel2')
@section('Contenido')

<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<br>
			<br>
			<h2>Seguimiento por GPS</h2>
			<form class="newsletter-form">
				<input type="text" placeholder="NUMERO DE ENCARGGO">
				<button class="site-btn">Buscar <img src="{{ asset('img/icons/double-arrow.png') }}" alt="#"/></button>
			</form>
		</div>
	</section>
	<!-- Newsletter section end -->

	<!-- Contact page -->
	<section class="contact-page">
		<div class="container">
			<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14376.077865872314!2d-71.5332287!3d-33.03315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1546528920522" style="border:0" allowfullscreen></iframe></div>
			<div class="row">
				<div class="col-lg-7 order-2 order-lg-1">
					
				</div>
				<div class="col-lg-5 order-1 order-lg-2 contact-text text-white">
					
				</div>
			</div>
		</div>
	</section>
	<!-- Contact page end-->
