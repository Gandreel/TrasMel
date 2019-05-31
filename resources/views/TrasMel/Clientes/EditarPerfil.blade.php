@extends('Template.layoutTrasMelUss')
@section('Contenido')

<div class="card">
    <div class="card-header">
        <strong>Editar</strong> Usuario
    </div>
    <div class="card-body card-block">
        <form action="{{ url('ActualizarCrear') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
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
                    <img src="avatars/default.png" alt="default" />
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
                        placeholder="1111111-1" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Nombre</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="nombre" value=""
                        placeholder="Nombre" class="form-control" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="apellido-input" class=" form-control-label">Apellidos</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="apellido-input" name="apellidos" value=""
                        placeholder="Apellidos" class="form-control" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class=" form-control-label">E-Mail</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="email" id="email-input" name="correo" value="{{ $correo }}"
                        placeholder="E-Mail" class="form-control" disabled>
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
                        placeholder="Las Ágatas 405, Viña del Mar, Viña del Mar, Chile" class="form-control" required>
                </div>
            </div>
    </div>
    <div class="card-footer">
            <input type="hidden" name="id" value="{{ $id }}"/>
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
