@extends('Template.layoutTrasMel2')
@section('Contenido')

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="{{ asset('Home/img/page-top-bg/1.jpg') }}">
		<div class="page-info">
			<h2>Games</h2>
			<div class="site-breadcrumb">
				<a href="">Inicio</a>  /
				<a href="">Noticias</a>  /
				<span>TrasMel</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->


	<!-- Games section -->
	<section class="games-single-page">
		<div class="container">
			<div class="game-single-preview">
				<img src="{{ asset('Home/img/blog-big/app.png') }}" alt="">
			</div>
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7 game-single-content">
					<div class="gs-meta">24/05/2019  /  en <a href="">Noticias</a></div>
					<h2 class="gs-title">TrasMel lanza su aplicación movil</h2>
					<h4>Noticia</h4>
					<p>Durante la feria de desarrollo e innovación, la empresa TrasMel anunció el lanzamiento de su nuevo aplicación, llamada de la misma manera que la empresa, en una entrevista con el director de desarrollo, Cristopher Escobar, nos dijo "Nuestra aplicación está enfocada a que el cliente pueda obtener el seguimiento de su encomienda en tiempo real", esto ha llamado mucho la atención, ya que según el Gerente "La cifras de perdidas de envios en todo el pais son excesivos, es por esto que hemos querido mejorar esto, la idea de nuestra aplicación es que el cliente tenga la seguridad de que su envio está en camino, además de tener evidencias sobre el envio", </p>
					<div class="geme-social-share pt-5 d-flex">
						<p>Compartir:</p>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar game-page-sideber">
					<div id="stickySidebar">
						<div class="widget-item">
							<div class="testimonials-widget">
								<h4 class="widget-title">Comentario</h4>
								<div class="testim-text">
									<p>Muy buen trabajo, espero sigan innovando, se merecen todo el apoyo en lo que están haciendo.</p>
									<h6><span>Luis Lazo,</span>Informatico</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Games end-->

	<section class="game-author-section">
		<div class="container">
			<div class="game-author-pic set-bg" data-setbg="{{ asset('Home/img/author.jpg') }}"></div>
			<div class="game-author-info">
				<h4>Escrito por: Michael Williams</h4>
				<p>Periodista desde los 24 años, egresado de la prestigiosa Universidad de Chile, amante de lo nuevo y creador de contenido dentro de la página de TrasMel.</p>
			</div>
		</div>
	</section>


	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<h2>Suscríbete para recibir nuestras últimas noticias</h2>
			<form class="newsletter-form">
				<input type="text" placeholder="Ingrese su E-Mail">
				<button class="site-btn">subscrirse <img src="{{ asset('Home/img/icons/double-arrow.png') }}" alt="#"/></button>
			</form>
		</div>
	</section>
	<!-- Newsletter section end -->
