@extends('Template.layoutTrasMelADM')
@section('Contenido')

<div class="container">
	<div class="table-responsive table--no-card">
		<table class="table table-borderless table-striped table-earning">
			<thead>
				<tr>
					<th>Id</th>
					<th>NickName</th>
                    <th>Contraseña</th>
                    <th>Email</th>
                    <th>IdPersonal</th>
					<th class="text-center">Categoria</th>
					<th class="text-right">Opciones</th>
				</tr>
			</thead>
			<tbody>
			<!--	<tr>
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
                </tr>-->
                <form action="{{ url('EditarPersonal') }}" method="post">
                @foreach ($usuarios as $usu)
                        <tr>
                            <td>{{ $usu['idUsuario'] }}</td>
                            <td>{{ $usu['nick'] }}</td>
                            <td>{{ $usu['pass'] }}</td>
                            <td>{{ $usu['correo'] }}</td>
                            <td>{{ $usu['idPersona'] }}</td>
                            <td>{{ $usu['categoria'] }}</td>
                            <td class="text-right">
                                    <div class="table-data-feature">
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Editar">
                                            <i class="zmdi zmdi-edit"></i>
                                        </button>
                                        <input type="hidden" name="id" class="btn btn-danger" value="{{ $usu['idUsuario'] }}">
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
			        <!--<tr>


					<form method="get" action="{{ url('EditarPersonal') }}" >
						<td>8.548.596-5</td>
						<td>Juan</td>
						<td>Prez Rojas</td>
						<td>Pioneta</td>
						<td class="text-right">
							<span class="status--denied">Parado</span>
						</td>
						<td class="text-right">
							<div class="table-data-feature">
								<button class="item" data-toggle="tooltip" data-placement="top" title="Editar" >
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
				</tr>-->
			</tbody>
		</table>
	</div>
</div>

@endsection
