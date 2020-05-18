@extends('admin.dashboard')
@section('content')
    <div class="container">
    <h1>Control de asistencias&nbsp; <a href="{{route('admin.asistencia.create')}}" class="btn btn-outline-primary"> <i class="fa fa-plus"></i> </a> </h1>
    </div>
    <div class="container table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <th>Codigo</th>
                <th>Aprendiz</th>
                <th>Instructor</th>
                <th>Actividad</th>
                <th>Componente Estrategico</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                @forelse ($asistencia as $item)
                <tr>
                    <td>{{$item->IdAsistencia}}</td>
                    <td>{{$item->aprendiz}}</td>
                    <td>{{$item->instru}}</td>
                    <td>{{$item->actividad}}</td>
                    <td>{{$item->ComponenteEstrategico}}</td>
                    <td>{{$item->Fecha}}</td>
                    <td>{{$item->Hora}}</td>
                    <td> <a href="{{route('admin.asistencia.edit',$item->IdAsistencia)}}" class="btn btn-warning"> <i class="fa fa-pencil"></i> </a> </td>
                    <td> <a href="{{route('admin.asistencia.destroy',$item->IdAsistencia)}}" class="btn btn-danger" onclick="return confirm('¿Esta seguro de eliminar este registro?')"> <i class="fa fa-remove"></i> </a> </td>
                </tr>
                    @empty
                    
                @endforelse
            </tbody>
        </table>

        {{$asistencia->links()}}
    </div>
@endsection