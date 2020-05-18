@extends('admin.dashboard')

@section('content')
<div class="container">

<h3 class="text-center p-3"><small>Crear Nuevo Aprendiz</small></h3>

<form action="{{route('admin.aprendices.store')}}" method="POST"  enctype="multipart/form-data" >
	@csrf
		<div class="row justify-content-md-center">
			<div class="col-md-6 bg-light  border rounded">
                <div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" class="form-control" name="Nombre">
				</div>
				<div class="form-group">
					<label for="nombre">Apellido</label>
					<input type="text" class="form-control" name="Apellido">
				</div>
				<div class="form-group">
					<label for="nombre">programa</label><br> 
					<select name="programa" id="" class="form-control">
						@forelse ($programa as $item)
							<option value="{{$item->IdPrograma}}">{{$item->Nombre}}</option>
						@empty
							-
						@endforelse	
					</select> 
				</div>
				<div class="form-group">
					<label for="nombre">Telefono</label>
					<input type="number" class="form-control" name="Telefono">
				</div>

				<div class="form-group">
					<label for="nombre">Documento</label>
					<input type="number" class="form-control" name="Documento">
				</div>

				<div class="form-group">
					<label for="nombre">Genero</label>
					<input type="text" class="form-control" name="Genero">
				</div>

				<div class="form-group">
					<label for="nombre">Correo</label>
					<input type="text" class="form-control" name="Correo">
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="row mb-5">
					 		 <div class="col-md-6">
					 			 <button class="btn btn-outline-primary btn-md btn-block">Crear</button>
                                  <br>
                                  <a href="{{ route('admin.aprendices.index')}}" class="btn btn-outline-secondary btn-md "><i class="fa fa-return"></i> regresar &nbsp;<i class="fa fa-return"></i> </a>
                                </div>
                        </div>

                  </div>

                </div>	
	
			</div>

		</div>	
</form>
</div>




@endsection