@extends('Template.layoutTrasMelADM')
@section('Contenido')

<!-- Info -->
<div class="row">
	<div class="col-lg-6">
		<div class="card">
			<div class="card-header">
				<strong>Encargo /</strong> #584568
			</div>
			<div class="card-body card-block">
				<form action="" method="post" class="form-horizontal">
					<div class="row form-group">
						<div class="col col-md-3">
							<label for="hf-email" class=" form-control-label">Cliente</label>
						</div>
						<div class="col-12 col-md-9">
							<label for="hf-email" class=" form-control-label">Jorge Igancio Cortes Rojas</label>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3">
							<label for="hf-password" class=" form-control-label">Direccion</label>
						</div>
						<div class="col-12 col-md-9">
							<label for="hf-email" class=" form-control-label">Álvarez 936-988, Viña del Mar, Región</label>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-3">
							<label for="hf-password" class=" form-control-label">Paquete</label>
						</div>
						<div class="col-12 col-md-9">
							<label for="hf-email" class=" form-control-label">Muy Frágil, Manejar con mucho Cuidado </label>
						</div>
					</div>
				</form>
			</div>
			<div class="card-footer">
				<button type="submit" class="btn btn-primary btn-sm">
					<i class="fa fa-dot-circle-o"></i> Entregado
				</button>
				<button type="reset" class="btn btn-danger btn-sm">
					<i class="fa fa-ban"></i> Problema
				</button>
			</div>
		</div>
	</div>
</div>

<!-- Mapa -->
<div class="row">
	<div class="col-lg-12">
		<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d5625.271718029917!2d-71.53613171715584!3d-33.035226022854744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-33.0341318!2d-71.53287949999999!4m5!1s0x9689de0b2d721c9f%3A0xa056c6b5cf11cbe!2zw4FsdmFyZXogOTM2LTk4OCwgVmnDsWEgZGVsIE1hciwgUmVnacOzbiBkZSBWYWxwYXJhw61zbw!3m2!1d-33.0271849!2d-71.5484687!5e0!3m2!1ses-419!2scl!4v1559291159073!5m2!1ses-419!2scl" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</div>


@endsection