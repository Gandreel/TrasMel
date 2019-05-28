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
				<img src="{{ asset('Home/img/blog-big/Anuncio.jpg') }}" alt="">
			</div>
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7 game-single-content">
					<div class="gs-meta">20/03/2019  /  en <a href="">Noticias</a></div>
					<h2 class="gs-title">TrasMel anuncia que está desarrollando una Aplicación Movil</h2>
					<h4>Noticia</h4>
					<p>Durante una entrevista al gerente de la empresa TrasMel, Alexander Maldonado, nos ha anunciado que su equipo de desarrollo informatico está creando una aplicación movil, lo que nos ha dicho es que "Esperamos lanzar pronto la aplicación movil, pero no la lanzaremos hasta que la aplicación esté totalmente desarrollada, no tenga ningun problema y así el usuario no tenga problema alguno", es por esto que el Gerente no nos ha querido informar sobre el lanzamiento de la futura aplicación, en una entrevista con el Jefe de desarrollo, Cristopher Escobar, nos ha explicado que "queremos que este totalmente optimizada la aplicación antes de lanzarla, no queremos terminar como otras aplicaciones que empezarona a lanzar aplicaciones y tenían demasiados problemas, es por esto que no queremos dar información o fechas sobre el lanzamiento, porque no queremos ilusionar a nuestros clientes", con esto a quedado más que claro que la empresa TrasMel, va por todo en cuanto se refiere a la innovación y al cariño que le tiene a sus clientes.</p>
					<div class="geme-social-share pt-5 d-flex">
						<p>Share:</p>
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
						</div>
						<div class="widget-item">
							<div class="testimonials-widget">
								<h4 class="widget-title">Comentarios</h4>
								<div class="testim-text">
									<p>Espero puedan tener la aplicación lista lo más pronto posible, me gustaría ser uno de los primeros en probarla.</p>
									<h6><span>Luis Lazo,</span>Informatica</h6>
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
				<button class="site-btn">subscrir <img src="{{ asset('Home/img/icons/double-arrow.png') }}" alt="#"/></button>
			</form>
		</div>
	</section>
	<!-- Newsletter section end -->
