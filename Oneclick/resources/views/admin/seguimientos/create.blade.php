@extends('admin.dashboard')
@section('content')
<div class="container">

<h3 class="text-center p-3"><small>Crear Nuevo Seguimiento</small></h3>

<form action="{{route('admin.seguimientos.store')}}" method="POST">
	@csrf
		<div class="row justify-content-md-center">
			<div class="col-md-6 bg-light  border rounded">
                <div class="form-group">
					<label for="nombre">Aprendiz</label><br> 
					<select name="aprendices" id="" class="form-control">
						@forelse ($aprendices as $item)
							<option value="{{$item->IdUsuario}}">{{$item->Nombre}}</option>
						@empty
							-
						@endforelse	
					</select> 
				</div>
                <div class="form-group">
					<label for="nombre">Instructor</label><br> 
					<select name="instructores" id="" class="form-control">
						@forelse ($instructores as $item)
							<option value="{{$item->IdInstructor}}">{{$item->Nombre}}</option>
						@empty
							-
						@endforelse	
					</select> 
				</div>
				<div class="form-group">
					<label for="nombre">Fecha</label>
					<input type="date" class="form-control" name="Fecha">
				</div>

				<div class="form-group">
					<label for="nombre">Peso</label>
					<input type="number" class="form-control" name="Peso">
				</div>
				<div class="form-group">
					<label for="nombre">Talla</label>
					<input type="number" class="form-control" name="Talla">
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="row mb-5">
					 		 <div class="col-md-6">
					 			 <button class="btn btn-outline-primary btn-md btn-block">Crear</button>
                                  <br>
                                  <a href="{{ route('admin.seguimientos.index')}}" class="btn btn-outline-secondary btn-md "><i class="fa fa-return"></i> regresar &nbsp;<i class="fa fa-return"></i> </a>
                                </div>
                        </div>

                  </div>

                </div>	
	
			</div>

		</div>	
</form>
</div>




@endsection