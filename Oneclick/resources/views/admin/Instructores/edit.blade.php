@extends('admin.dashboard')
@section('content')
<div class="container">

<h3 class="text-center p-3"><small>Editar Instructor</small></h3>

<form action="{{route('admin.instructores.update', $instructores->IdInstructor)}}" method="POST"  enctype="multipart/form-data" >
	@csrf
		<div class="row justify-content-md-center">
			<div class="col-md-6 bg-light  border rounded">
                <div class="form-group">
					<label for="nombre">Nombre</label>
                <input type="text" class="form-control" value="{{$instructores->Nombre}}" name="Nombre">
				</div>
				<div class="form-group">
					<label for="nombre">Apellido</label>
					<input type="text" class="form-control" value="{{$instructores->Apellido}}" name="Apellido">
				</div>

				<div class="form-group">
					<label for="nombre">Documento</label>
					<input type="number" class="form-control" value="{{$instructores->Documento}}" name="Documento">
				</div>

				<div class="form-group">
					<label for="nombre">Clave</label>
					<input type="text" class="form-control" value="{{$instructores->Clave}}" name="Clave">
				</div>

				<div class="form-group">
					<label for="nombre">Estado</label>
					<input type="text" class="form-control" value="{{$instructores->Estado}}" name="Estado">
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="row mb-5">
					 		 <div class="col-md-6">
					 			 <button class="btn btn-outline-primary btn-md btn-block">Actualizar</button>
                                  <br>
                                  <a href="{{ route('admin.instructores.index')}}" class="btn btn-outline-secondary btn-md "><i class="fa fa-return"></i> regresar &nbsp;<i class="fa fa-return"></i> </a>
                                </div>
                        </div>

                  </div>

                </div>	
	
			</div>

		</div>	
</form>
</div>




@endsection