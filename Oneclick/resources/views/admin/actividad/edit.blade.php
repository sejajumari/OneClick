@extends('admin.dashboard')

@section('content')

<h3 class="text-center p-3"><small>Editar actividad</small></h3>

<form action="{{route('admin.actividad.update', $actividades->IdActividad)}}" method="POST" class="p-3 form">
	@csrf
		<div class="row justify-content-md-center">
			<div class="col-md-6 bg-light p-3 border rounded">
				<div class="form-group">
					<label for="nombre">Nombre</label>
                <input type="text" class="form-control" value="{{$actividades->Nombre}}" name="Nombre">
				</div>

                <button class="btn btn-primary">Actualizar</button> <br> <br>
                <a href="{{ route('admin.actividad.index')}}" class="btn btn-outline-secondary btn-md ">regresar &nbsp;<i class="fa fa-return"></i> </a>
			</div>
		</div>	
</form>
@endsection