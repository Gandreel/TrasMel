@extends('Template.layoutTrasMelADM')
@section('Contenido')

<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<i class="fa fa-user"></i>
				<strong class="card-title pl-2">Perfil</strong>
			</div>
			<div class="card-body">
				<div class="mx-auto d-block">
					<img class="rounded-circle mx-auto d-block avatarIcon" src="{{ asset('Admin/images/Avatars/Man.png') }}" alt="Card image cap">
					<h5 class="text-sm-center mt-2 mb-1">Steven Lee</h5>
					<h5 class="text-sm-center mt-2 mb-1">98.254.365-8</h5>
					<div class="location text-sm-center">
						<i class="fa fa-home"></i> California, United States
					</div>
					<h5 class="text-sm-center mt-2 mb-1">Duoc UC</h5>
				</div>
				<hr>
				<div class="card-text text-center">
					<div class="card-body">
						<button type="button" class="btn btn-TrasMel">
							<i class="fa fa-gear"></i>&nbsp; Editar Perfil
						</button>
						<button type="button" class="btn btn-TrasMel">
							<i class="fa fa-envelope"></i>&nbsp; Cambiar Correo
						</button>						
						<button type="button" class="btn btn-TrasMel">
							<i class="fa fa-magic"></i>&nbsp; Cambiar Contraseña
						</button>
						<button type="button" class="btn btn-TrasMel btn-TrasMel-warnign">
							<i class="fa fa-exclamation-circle"></i>&nbsp;Eliminar Cuenta
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<!-- Grafico Circulo -->
	<div class="col-md-6 col-lg-6">
		<div class="chart-percent-2">
			<h3 class="title-3 m-b-30">Encargos: 30 de Mayo</h3>
			<div class="chart-wrap">
				<canvas id="percent-chart2"></canvas>
				<!-- Origen en js para datos de grafico  -->
				<div id="chartjs-tooltip">
					<table>
					</table>
				</div>
			</div>
			<div class="chart-info">
				<div class="chart-note">
					<span class="dot dot--blue"></span>
					<span>Entregados</span>
				</div>
				<div class="chart-note">
					<span class="dot dot--yellow"></span>
					<span>Stand By</span>
				</div>
				<div class="chart-note">
					<span class="dot dot--red"></span>
					<span>En transito</span>
				</div>
			</div>
		</div>
	</div>

	<!-- Grafico Lineal-->

	<div class="col-md-6 col-lg-6">
		<div class="recent-report3 m-b-40">
			<div class="title-wrap">
				<h3 class="title-3">Estadistica</h3>
				<div class="chart-info-wrap">
					<div class="chart-note">
						<span class="dot dot--blue"></span>
						<span>Envios</span>
					</div>
					<div class="chart-note mr-0">
						<span class="dot dot--green"></span>
						<span>Resivos</span>
					</div>
				</div>
			</div>
			<div class="filters m-b-55">
				<div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
					<select class="js-select2" name="property">
						<option selected="selected">Tiempo</option>
						<option value="">Dias</option>
						<option value="">Meses</option>
						<option value="">Años</option>
					</select>
					<div class="dropDownSelect2"></div>
				</div>
			</div>
			<div class="chart-wrap">
				<canvas id="recent-rep3-chart"></canvas>
			</div>
		</div>
	</div>

</div>

@endsection