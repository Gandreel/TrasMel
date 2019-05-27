@extends('Template.layoutTrasMelADM')
@section('Contenido')

<div class="card">
	<div class="card-header">
        <strong>Editar</strong> Usuario
	</div>
	<div class="card-body card-block">
		<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
			
			<div class="row form-group">
				<div class="col col-md-3">
					<label class=" form-control-label">Avatar</label>
				</div>
				<div class="col-3 col-md-2">
                <img src="{{ asset('Admin/images/icon/avatar-01.jpg') }}" alt="John Doe" />
				</div>
				<div class="col-5 col-md-5">
					<input type="file" id="file-input" name="file-input" class="form-control-file">
				</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3">
					<label class=" form-control-label">Rut</label>
				</div>
				<div class="col-4 col-md-3">
                <input type="text" class=" form-control" name="id" value="" placeholder="1111111-1">
				</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="text-input" class=" form-control-label">Nombre</label>
				</div>
				<div class="col-12 col-md-9">
					<input type="text" id="text-input" name="text-input" placeholder="Nombres" class="form-control">
				</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="email-input" class=" form-control-label">Apellido Paterno</label>
				</div>
				<div class="col-12 col-md-9">
					<input type="text" id="text-input" name="text-input" placeholder="Apellido Paterno" class="form-control">
				</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="email-input" class=" form-control-label">Apellido Materno</label>
				</div>
				<div class="col-12 col-md-9">
					<input type="text" id="text-input" name="text-input" placeholder="Apellido Materno" class="form-control">
				</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="email-input" class=" form-control-label">E-Mail</label>
				</div>
				<div class="col-12 col-md-9">
					<input type="email" id="email-input" name="email-input" placeholder="E-Mail" class="form-control">
				</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="email-input" class=" form-control-label">Fono</label>
				</div>
				<div class="col-12 col-md-9">
					<input type="text" id="text-input" name="text-input" placeholder="+56987456325" class="form-control">
				</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="email-input" class=" form-control-label">Direccion</label>
				</div>
				<div class="col-12 col-md-9">
					<input type="text" id="text-input" name="text-input" placeholder="Las Ágatas 405, Viña del Mar, Viña del Mar, Chile" class="form-control">
				</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-3">
					<label for="select" class=" form-control-label">Tipo de Usuario</label>
				</div>
				<div class="col-5 col-md-4">
					<select name="select" id="select" class="form-control">
						<option value="0">Seleccione</option>
						<option value="1">Conductor</option>
						<option value="2">Pioneta</option>
						<option value="3">Administrador</option>
					</select>
				</div>
				<div class="col col-md-1">
					<label for="select" class=" form-control-label">Estado</label>
				</div>
				<div class="col-5 col-md-4">
					<select name="select" id="select" class="form-control">
						<option value="0">Seleccione</option>
						<option value="1">Activo</option>
						<option value="2">Inactivo</option>
					</select>
				</div>
			</div>
		</form>
	</div>
	<div class="card-footer">
		<button type="submit" class="btn btn-primary btn-sm">
			<i class="fa fa-dot-circle-o"></i> Guardar
		</button>
		<button type="reset" class="btn btn-danger btn-sm">
			<i class="fa fa-ban"></i> Cancelar
		</button>
	</div>
</div>
@endsection
