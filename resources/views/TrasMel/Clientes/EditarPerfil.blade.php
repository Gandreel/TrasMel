@extends('Template.layoutTrasMelADM')
@section('Contenido')

<div class="card">
    <div class="card-header">
        <strong>Editar</strong> Usuario
    </div>
    <div class="card-body card-block">
        <form action="{{ url('ActualizarCrear') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="col">
                    @if($mensaje != null)
                    <label class="alert alert-warning">{{$mensaje}}</label>
                    @endif
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label class=" form-control-label">Avatar</label>
                </div>
                <div class="col-3 col-md-2">
                    <img src="" alt="John Doe" />
                </div>
                <div class="col-5 col-md-5">
                    <input type="file" id="file-input" name="avatar" class="form-control-file">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label class=" form-control-label">Rut</label>
                </div>
                <div class="col-4 col-md-3">
                    <input type="text" class=" form-control" name="rut" value=""
                        placeholder="1111111-1">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Nombre</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="nombre" value=""
                        placeholder="Nombre" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="apellido-input" class=" form-control-label">Apellido Paterno</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="apellido-input" name="apellidos" value=""
                        placeholder="Apellido Paterno" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class=" form-control-label">E-Mail</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="email" id="email-input" name="correo" value="{{ $correo }}"
                        placeholder="E-Mail" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="fono-input" class=" form-control-label">Fono</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="fono-input" name="fono" value=""
                        placeholder="+56987456325" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="direccion-input" class=" form-control-label">Direccion</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="direccion-input" name="direccion" value=""
                        placeholder="Las Ágatas 405, Viña del Mar, Viña del Mar, Chile" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="select" class=" form-control-label">Tipo de Usuario</label>
                </div>
                <div class="col-5 col-md-4">
                    <select name="categoria" id="select" class="form-control">
                        <option value="0">Seleccione</option>
                        <option value="1">Administrador</option>
                        <option value="2">Cliente</option>
                        <option value="3">Chofer</option>
                        <option value="4">Pioneta</option>
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

    </div>
    <div class="card-footer">
            <input type="text" name="id" value="{{ $id }}"/>
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Guardar
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Cancelar
        </button>
    </div>
    @csrf
</form>
</div>
@endsection
