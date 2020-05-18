@extends('admin.dashboard')
@section('content')
    <div class="container">
        <h1><strong>Citas Agendadas</strong></h1>
    </div>
    <div class="container table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                @forelse ($citas as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->apellido}}</td>
                        <td>{{$item->fecha}}</td>
                        <td>{{$item->hora}}</td>
                        <td><a href="{{route('admin.citas.edit', $item->id)}}" class="btn btn-warning"><i class="fa fa-pencil"></i> </a> </td>
                    <td> <a href="{{route('admin.citas.destroy', $item->id)}}" class="btn btn-danger" onclick="return confirm('¿Esta seguro de eliminar este registro?')"> <i class="fa fa-remove"></i> </a> </td>
                    </tr>
                @empty
                    
                @endforelse
            </tbody>
        </table>
        {{$citas->links()}}
    </div>
@endsection