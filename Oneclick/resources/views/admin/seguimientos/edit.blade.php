@extends('admin.dashboard')
@section('content')
<div class="container">

<h3 class="text-center p-3"><small>Editar un Seguimiento</small></h3>

<form action="{{route('admin.seguimientos.update',$seguimientos->IdSeguimiento)}}" method="POST">
	@csrf
		<div class="row justify-content-md-center">
			<div class="col-md-6 bg-light  border rounded">
                <div class="form-group">
					<label for="nombre">Aprendiz</label><br> 
					<select name="aprendices" id="" class="form-control">
						@forelse ($aprendices as $item)
							@if($seguimientos->IdUsuario==$item->IdUsuario)
								<option value="{{$item->IdUsuario}}" selected>{{$item->Nombre}}</option>
							@else
								<option value="{{$item->IdUsuario}}">{{$item->Nombre}}</option>
							@endif
						@empty
							---	
						@endforelse
					</select> 
				</div>
                <div class="form-group">
					<label for="nombre">Instructor</label><br> 
                    <select name="instructores" id="" class="form-control">
						@forelse ($instructores as $item)
							@if($seguimientos->IdInstructor==$item->IdInstructor)
								<option value="{{$item->IdInstructor}}" selected>{{$item->Nombre}}</option>
							@else
								<option value="{{$item->IdInstructor}}">{{$item->Nombre}}</option>
							@endif
						@empty
							---	
						@endforelse
					</select> 
				</div>
				<div class="form-group">
					<label for="nombre">Fecha</label>
                <input type="date" class="form-control" value="{{$seguimientos->Fecha}}" name="Fecha">
				</div>

				<div class="form-group">
					<label for="nombre">Peso</label>
                <input type="number" class="form-control" value="{{$seguimientos->Peso}}" name="Peso">
				</div>
				<div class="form-group">
					<label for="nombre">Talla</label>
                <input type="number" class="form-control" value="{{$seguimientos->Talla}}" name="Talla">
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="row mb-5">
					 		 <div class="col-md-6">
					 			 <button class="btn btn-outline-primary btn-md btn-block">Actualizar</button>
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