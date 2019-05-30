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
					<img class="rounded-circle mx-auto d-block" src="{{ asset('Admin/images/icon/avatar-01.jpg') }}" alt="Card image cap">
					<h5 class="text-sm-center mt-2 mb-1">Steven Lee</h5>
					<h5 class="text-sm-center mt-2 mb-1">98.254.365-8</h5>
					<div class="location text-sm-center">
						<i class="fa fa-map-marker"></i> California, United States
					</div>
				</div>
				<hr>
				<div class="card-text text-center">
					<div class="card-body">
						<button type="button" class="btn btn-success">
							<i class="fa fa-gear"></i>&nbsp; Editar Perfil
						</button>
						<button type="button" class="btn btn-primary">
							<i class="fa fa-envelope"></i>&nbsp; Cambiar Correo
						</button>						
						<button type="button" class="btn btn-warning">
							<i class="fa fa-magic"></i>&nbsp; Cambiar Contraseña
						</button>
						<button type="button" class="btn btn-danger">
							<i class="fa fa-exclamation-circle"></i>&nbsp;Eliminar Cuenta
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>


<div class="row">
	<div class="col-lg-6">
		<div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
			<div class="au-card-title" style="background-image:url('{{ asset('Admin/images/bg-title-01.jpg') }}');">
				<div class="bg-overlay bg-overlay--blue"></div>
				<h3>
					<i class="zmdi zmdi-account-calendar"></i>Mis Envios</h3>
					<button class="au-btn-plus">
						<i class="zmdi zmdi-plus"></i>
					</button>
				</div>
				<div class="au-task js-list-load">
					<div class="au-task__title">
						<p>Envios de ...</p>
					</div>
					<div class="au-task-list js-scrollbar3">
						<div class="au-task__item au-task__item--danger">
							<div class="au-task__item-inner">
								<h5 class="task">
									<a href="#">Encargo #55555555555</a>
								</h5>
								<span class="time">24/05/2019 10:00 AM</span>
							</div>
						</div>
						<div class="au-task__item au-task__item--warning">
							<div class="au-task__item-inner">
								<h5 class="task">
									<a href="#">Encargo #55555555555</a>
								</h5>
								<span class="time">24/05/2019 10:00 AM</span>
							</div>
						</div>
						<div class="au-task__item au-task__item--primary">
							<div class="au-task__item-inner">
								<h5 class="task">
									<a href="#">Encargo #55555555555</a>
								</h5>
								<span class="time">24/05/2019 10:00 AM</span>
							</div>
						</div>
						<div class="au-task__item au-task__item--success">
							<div class="au-task__item-inner">
								<h5 class="task">
									<a href="#">Encargo #55555555555</a>
								</h5>
								<span class="time">24/05/2019 10:00 AM</span>
							</div>
						</div>
						<div class="au-task__item au-task__item--danger js-load-item">
							<div class="au-task__item-inner">
								<h5 class="task">
									<a href="#">Encargo #55555555555</a>
								</h5>
								<span class="time">24/05/2019 10:00 AM</span>
							</div>
						</div>
						<div class="au-task__item au-task__item--warning js-load-item">
							<div class="au-task__item-inner">
								<h5 class="task">
									<a href="#">Encargo #55555555555</a>
								</h5>
								<span class="time">24/05/2019 10:00 AM</span>
							</div>
						</div>
					</div>
					<div class="au-task__footer">
						<button class="au-btn au-btn-load js-load-btn">Historial</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
				<div class="au-card-title" style="background-image:url('{{ asset('Admin/images/bg-title-02.jpg') }}');">
					<div class="bg-overlay bg-overlay--blue"></div>
					<h3>
						<i class="zmdi zmdi-comment-text"></i>Mis Recibos</h3>
						<button class="au-btn-plus">
							<i class="zmdi zmdi-plus"></i>
						</button>
					</div>
					<div class="au-task js-list-load">
						<div class="au-task__title">
							<p>Resivos de .....</p>
						</div>
						<div class="au-task-list js-scrollbar3">
							<div class="au-task__item au-task__item--danger">
								<div class="au-task__item-inner">
									<h5 class="task">
										<a href="#">Encargo #55555555555</a>
									</h5>
									<span class="time">24/05/2019 10:00 AM</span>
								</div>
							</div>
							<div class="au-task__item au-task__item--warning">
								<div class="au-task__item-inner">
									<h5 class="task">
										<a href="#">Encargo #55555555555</a>
									</h5>
									<span class="time">24/05/2019 10:00 AM</span>
								</div>
							</div>
							<div class="au-task__item au-task__item--primary">
								<div class="au-task__item-inner">
									<h5 class="task">
										<a href="#">Encargo #55555555555</a>
									</h5>
									<span class="time">24/05/2019 10:00 AM</span>
								</div>
							</div>
							<div class="au-task__item au-task__item--success">
								<div class="au-task__item-inner">
									<h5 class="task">
										<a href="#">Encargo #55555555555</a>
									</h5>
									<span class="time">24/05/2019 10:00 AM</span>
								</div>
							</div>
							<div class="au-task__item au-task__item--danger js-load-item">
								<div class="au-task__item-inner">
									<h5 class="task">
										<a href="#">Encargo #55555555555</a>
									</h5>
									<span class="time">24/05/2019 10:00 AM</span>
								</div>
							</div>
							<div class="au-task__item au-task__item--warning js-load-item">
								<div class="au-task__item-inner">
									<h5 class="task">
										<a href="#">Encargo #55555555555</a>
									</h5>
									<span class="time">24/05/2019 10:00 AM</span>
								</div>
							</div>
						</div>
						<div class="au-task__footer">
							<button class="au-btn au-btn-load js-load-btn">Historial</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@endsection