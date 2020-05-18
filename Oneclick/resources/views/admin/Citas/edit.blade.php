@extends('admin.dashboard')
@section('content')
    
    <h3 class="text-center"p-3> <small>Editar una cita</small> </h3>
    <form action="{{route('admin.citas.update',$citas->id)}}" method="POST" class="p-3 form">
        @csrf
        <div class="row justify-content-md-center">
            <div class="col-md-6 bg-light p-3 border rounded">
                <div class="form-group">
                  <label for="">Nombre</label>
                <input type="text" value="{{$citas->nombre}}" name="nombre" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">Apellido</label>
                <input type="text" value="{{$citas->apellido }}" name="apellido" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">Fecha</label>
                <input type="date" value="{{$citas->fecha}}" name="fecha" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">Hora</label>
                <input type="time" value="{{$citas->hora}}" name="hora" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <button type="submit" class="btn btn-outline-primary">Actualizar</button>
            <br> <br> <a href="{{route('admin.citas.index')}}" class="btn btn-outline-dark"><i class="fa fa-back"></i>&nbsp;Regresar</a>
            </div>
        </div>
    
    </form>
    
@endsection