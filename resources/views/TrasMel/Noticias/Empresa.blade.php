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
				<img src="{{ asset('Home/img/blog-big/Empresa.jpg') }}" alt="">
			</div>
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7 game-single-content">
					<div class="gs-meta">03/03/2019  /  en <a href="">Noticias</a></div>
					<h2 class="gs-title">Se presenta una nueva Empresa</h2>
					<h4>Noticia</h4>
					<p>Durante la feria de innovación hecha dentro del establecimiento educacional, DuocUC, especificamente en la sede de Viña del Mar, se presentó la nueva empresa llamada TrasMel, según lo que dijo el Gerente, Alexander Maldonado, "Nuestra empresa está destinada al monitoreo de los envios que hacen los clientes a través de los correos, tales como correos de Chile, Chilexpress, Starken, entre otros." Según el Jefe en Desarrollo, Cristopher Escobar, nos dijo que "Tenemos muchas ideas para el futuro y apenas tengamos listas nuestras maquetas, lanzaremos la noticia a todo el mundo, pero por el momento todo es secreto." Luego de esto la empresa se despidió del público.</p>
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
							<div class="testimonials-widget">
								<h4 class="widget-title">Testimonials</h4>
								<div class="testim-text">
									<p>Veamos que tal, espero que les salga todo bien y puedan tener mucho exito de todas maneras.</p>
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
