@extends('Template.layoutTrasMelADM')
@section('Contenido')

<div class="col-md-12">
	<!-- DATA TABLE -->
	<h3 class="title-5 m-b-35">Personal</h3>
	<div class="table-data__tool">
		<div class="table-data__tool-left">
			<div class="rs-select2--light rs-select2--md">
				<select class="js-select2" name="property">
					<option selected="selected">Propiedades</option>
					<option value="">Conductor</option>
					<option value="">Pioneta</option>
					<option value="">Administrador</option>
				</select>
				<div class="dropDownSelect2"></div>
			</div>
			<div class="rs-select2--light rs-select2--sm">
				<select class="js-select2" name="time">
					<option selected="selected">Estado</option>
					<option value="">Activo</option>
					<option value="">Inactivo</option>
				</select>
				<div class="dropDownSelect2"></div>
			</div>
			<button class="au-btn-filter">
				<i class="zmdi zmdi-filter-list"></i>Filtrar</button>
			</div>
			<div class="table-data__tool-right">
				<button class="au-btn au-btn-icon au-btn--green au-btn--small">
					<i class="zmdi zmdi-plus"></i>Agregar</button>
					<div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
						<select class="js-select2" name="type">
							<option selected="selected">Exportar</option>
							<option value="">Todos</option>
							<option value="">Marcados</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>
			</div>
			<div class="table-responsive table-responsive-data2">
				<table class="table table-data2">
					<thead>
						<tr>
							<th></th>
							<th>Rut</th>
							<th>Nombre</th>
							<th>Apellidos</th>
							<th>E-Mail</th>
							<th>Fono</th>
							<th>Tipo</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($usuarios as $usu)
						<form action="{{ url('EditarPersonal') }}" method="post">
							<tr class="spacer"></tr>
							<tr>
								<td>
									<label class="au-checkbox">
										<input type="checkbox">
										<span class="au-checkmark"></span>
									</label>
								</td>
								<td>{{ $usu['rut'] }}</td>
								<td>{{ $usu['nombre'] }}</td>
								<td>{{ $usu['apellidos'] }}</td>
								<td>{{ $usu['email'] }}</td>
								<td>{{ $usu['fono'] }}</td>
								<td> 
									@if ( $usu['categoria']  == 1)
									<span class="role admin">Administrador</span>
									@elseif ($usu['categoria']  == 2)
									<span class="role member">Cliente</span>
									@else
									<span class="role user">Chofer</span>
									@endif
								</td>
								<td class="text-right">
									<div class="table-data-feature">
										<button class="item" data-toggle="tooltip" data-placement="top" title="Editar">
											<i class="zmdi zmdi-edit"></i>
										</button>
										<input type="hidden" name="id" class="btn btn-danger" value="{{ $usu['rut'] }}">
										<input type="hidden" name="_token" value="{{csrf_token()}}" />

										<button class="item" data-toggle="tooltip" data-placement="top" title="Eliminar">
											<i class="zmdi zmdi-delete"></i>
										</button>
									</div>
								</td>
							</tr>
							@csrf
						</form>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>	
						
@endsection
