@extends('admin.dashboard')
@section('content')
<div class="container">

<h3 class="text-center p-3"><small>Crear Asistencia</small></h3>

<form action="{{route('admin.asistencia.store')}}" method="POST">
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
					<label for="nombre">Actividad</label><br> 
					<select name="actividades" id="" class="form-control">
						@forelse ($actividades as $item)
							<option value="{{$item->IdActividad}}">{{$item->Nombre}}</option>
						@empty
							-
						@endforelse	
					</select> 
				</div>
				<div class="form-group">
					<label for="nombre">Componente Estrategico</label>
					<input type="text" class="form-control" name="Componente">
				</div>

				<div class="form-group">
					<label for="nombre">Fecha</label>
					<input type="date" class="form-control" name="Fecha">
				</div>
				<div class="form-group">
					<label for="nombre">Hora</label>
					<input type="time" class="form-control" name="Hora">
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="row mb-5">
					 		 <div class="col-md-6">
					 			 <button class="btn btn-outline-primary btn-md btn-block">Crear</button>
                                  <br>
                                  <a href="{{ route('admin.asistencia.index')}}" class="btn btn-outline-secondary btn-md "><i class="fa fa-return"></i> regresar &nbsp;<i class="fa fa-return"></i> </a>
                                </div>
                        </div>

                  </div>

                </div>	
	
			</div>

		</div>	
</form>
</div>




@endsection