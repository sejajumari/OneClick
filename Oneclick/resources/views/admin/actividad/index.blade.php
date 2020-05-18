@extends('admin.dashboard')
@section('content')
    <div class="container">
    <h1>Actividades &nbsp; <a href="{{route('admin.actividad.create')}}" class="btn btn-outline-primary"> <i class="fa fa-plus"></i> </a> </h1>
    </div>
    <div class="container table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                @forelse ($actividades as $item)
                    <tr>
                        <td>{{$item->IdActividad}}</td>
                        <td>{{$item->Nombre}}</td>
                        <td><a href="{{route('admin.actividad.edit', $item->IdActividad)}}" class="btn btn-warning"><i class="fa fa-pencil"></i></a></td>
                        <td><a href="{{route('admin.actividad.destroy', $item->IdActividad)}}" class="btn btn-danger" onclick="return confirm('¿Esta seguro de eliminar este registro?')"><i class="fa fa-remove"></i></a></td>
                    </tr>
                @empty
                    
                @endforelse
            </tbody>
        </table>
        {{$actividades->links()}}
    </div>
@endsection