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
							<th>Fono</th>
							<th>Tipo</th>
							<th>Estado</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr class="tr-shadow">
							<td>
								<label class="au-checkbox">
									<input type="checkbox">
									<span class="au-checkmark"></span>
								</label>
							</td>
							<td>8.598.689-6</td>
							<td>Alan</td>
							<td>Brito Delgado</td>
							<td>+56 984215487</td>
							<td>
								<span class="role admin">Administrador</span>
							</td>
							<td>
								<span class="status--process">Activo</span>
							</td>
							
							<td>
								<div class="table-data-feature">
									<button class="item" data-toggle="tooltip" data-placement="top" title="Editar">
										<i class="zmdi zmdi-edit"></i>
									</button>
									<button class="item" data-toggle="tooltip" data-placement="top" title="Borrar">
										<i class="zmdi zmdi-delete"></i>
									</button>
								</div>
							</td>
						</tr>
						<tr class="spacer"></tr>
						<tr class="tr-shadow">
							<td>
								<label class="au-checkbox">
									<input type="checkbox">
									<span class="au-checkmark"></span>
								</label>
							</td>
							<td>8.598.689-6</td>
							<td>Alan</td>
							<td>Brito Delgado</td>
							<td>+56 984215487</td>
							<td>
								<span class="role user">Pioneta</span>
							</td>
							<td>
								<span class="status--denied">Inactivo</span>
							</td>
							
							<td>
								<div class="table-data-feature">
									<button class="item" data-toggle="tooltip" data-placement="top" title="Editar">
										<i class="zmdi zmdi-edit"></i>
									</button>
									<button class="item" data-toggle="tooltip" data-placement="top" title="Borrar">
										<i class="zmdi zmdi-delete"></i>
									</button>
								</div>
							</td>
						</tr>
						<tr class="spacer"></tr>
						<tr class="tr-shadow">
							<td>
								<label class="au-checkbox">
									<input type="checkbox">
									<span class="au-checkmark"></span>
								</label>
							</td>
							<td>8.598.689-6</td>
							<td>Alan</td>
							<td>Brito Delgado</td>
							<td>+56 984215487</td>
							<td>
								<span class="role member">Chofer</span>
							</td>
							<td>
								<span class="status--warning">Pendiente</span>
							</td>
							
							<td>
								<div class="table-data-feature">
									<button class="item" data-toggle="tooltip" data-placement="top" title="Editar">
										<i class="zmdi zmdi-edit"></i>
									</button>
									<button class="item" data-toggle="tooltip" data-placement="top" title="Borrar">
										<i class="zmdi zmdi-delete"></i>
									</button>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

@endsection
