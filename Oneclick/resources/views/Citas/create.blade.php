@extends('layouts.app')
@section('content')

<div class="site-section">
	<div class="container">
		<h2 class="h3 mb-5 text-black">Agenda tu cita</h2>
		<form action="{{ route('citas.store')}}" method="post">
			@csrf
			<div class="p-3 p-lg-5 border">
				<div class="form-group row">
					<label  class="col-sm-2 col-form-label">Nombre:</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" name="nombre" placeholder="Digite su nombre">
					</div>
				</div>
					<div class="form-group row">
						<label  class="col-sm-2 col-form-label">Apellido:</label>
					<div class="col-sm-10">
						  <input type="text" class="form-control" name="apellido" placeholder="Digite su apellido">
					</div>
					</div>	
					<div class="form-group row">
						<label  class="col-sm-2 col-form-label">Fecha:</label>
					<div class="col-sm-10">
						  <input type="date" class="form-control" name="fecha">
					</div>
					</div>	
					<div class="form-group row">
						<label  class="col-sm-2 col-form-label">Hora:</label>
					<div class="col-sm-10">
						  <input type="time" class="form-control" name="hora">
					</div>
					</div>

					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-lg btn-block" value="Agendar cita">
					</div>
			</div>
			
		</div>	
		</div>	
	
			
		</form>

	</div>
</div>
	

@endsection