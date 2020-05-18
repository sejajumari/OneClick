@extends('admin.dashboard')

@section('content')

<h3 class="text-center p-3"><small>Crear un nuevo programa</small></h3>


<form action="{{route('admin.programas.store')}}" method="post" class="p-3 form">
	@csrf
		<div class="row justify-content-md-center">
			<div class="col-md-6 bg-light p-3 border rounded">
				<div class="form-group">
					<label >Nombre:</label>
					<input type="text" class="form-control" name="Nombre">
                </div>
                <div class="form-group">
					<label >Modalidad del programa:</label>
					<input type="text" class="form-control" name="ModalidadPrograma">
				</div>

				<button class="btn btn-primary">Crear</button>
				<a href="{{ route('admin.programas.index')}}" class="btn btn-outline-secondary btn-md ">regresar &nbsp;<i class="fa fa-return"></i> </a>

			</div>
			
		</div>	
</form>
@endsection