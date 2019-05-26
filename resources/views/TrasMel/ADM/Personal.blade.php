@extends('Template.layoutTrasMelADM')
@section('Contenido')

<div class="container">
	<div class="table-responsive table--no-card">
		<table class="table table-borderless table-striped table-earning">
			<thead>
				<tr>
					<th>Rut</th>
					<th>Nombre</th>
					<th>Apellidos</th>
					<th class="text-center">Tipo</th>
					<th class="text-right">Estado</th>
					<th class="text-right">Opciones</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>8.548.596-5</td>
					<td>Alan</td>
					<td>Brito Delgado</td>
					<td>Conductor</td>
					<td class="text-right">
						<span class="status--process">Activo</span>
					</td>
					<td class="text-right">
						<div class="table-data-feature">
							<button class="item" data-toggle="tooltip" data-placement="top" title="Editar">
								<i class="zmdi zmdi-edit"></i>
							</button>
							<button class="item" data-toggle="tooltip" data-placement="top" title="Eliminar">
								<i class="zmdi zmdi-delete"></i>
							</button>
						</div>
					</td>
				</tr>
				<tr>
					<form method="{{ url('/Personal/Editar') }}">
						<td>8.548.596-5</td>
						<td>Juan</td>
						<td>Prez Rojas</td>
						<td>Pioneta</td>
						<td class="text-right">
							<span class="status--denied">Parado</span>
						</td>
						<td class="text-right">
							<div class="table-data-feature">
								<button class="item" data-toggle="tooltip" data-placement="top" title="Editar" href="url">
									<i class="zmdi zmdi-edit"></i>
								</button>
								<button class="item" data-toggle="tooltip" data-placement="top" title="Eliminar">
									<i class="zmdi zmdi-delete"></i>
								</button>
							</div>
						</td>
					</form>
				</tr>
				<tr>
					<td>8.548.596-5</td>
					<td>Alan</td>
					<td>Brito Delgado</td>
					<td>Conductor</td>
					<td class="text-right">
						<span class="status--warning">Procesando</span>
					</td>
					<td class="text-right">
						<div class="table-data-feature">
							<button class="item" data-toggle="tooltip" data-placement="top" title="Editar">
								<i class="zmdi zmdi-edit"></i>
							</button>
							<button class="item" data-toggle="tooltip" data-placement="top" title="Eliminar">
								<i class="zmdi zmdi-delete"></i>
							</button>
						</div>
					</td>
				</tr>
				<tr>
					<td>8.548.596-5</td>
					<td>Alan</td>
					<td>Brito Delgado</td>
					<td>Conductor</td>
					<td class="text-right">
						<span class="status--process">Activo</span>
					</td>
					<td class="text-right">
						<div class="table-data-feature">
							<button class="item" data-toggle="tooltip" data-placement="top" title="Editar">
								<i class="zmdi zmdi-edit"></i>
							</button>
							<button class="item" data-toggle="tooltip" data-placement="top" title="Eliminar">
								<i class="zmdi zmdi-delete"></i>
							</button>
						</div>
					</td>
				</tr>
				<tr>
					<td>8.548.596-5</td>
					<td>Alan</td>
					<td>Brito Delgado</td>
					<td>Conductor</td>
					<td class="text-right">
						<span class="status--process">Activo</span>
					</td>
					<td class="text-right">
						<div class="table-data-feature">
							<button class="item" data-toggle="tooltip" data-placement="top" title="Editar">
								<i class="zmdi zmdi-edit"></i>
							</button>
							<button class="item" data-toggle="tooltip" data-placement="top" title="Eliminar">
								<i class="zmdi zmdi-delete"></i>
							</button>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
      
@endsection                  