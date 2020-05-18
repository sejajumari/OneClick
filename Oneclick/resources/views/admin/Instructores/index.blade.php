@extends('admin.dashboard')
@section('content')
    <div class="container">
    <h1><strong>Instructores</strong>&nbsp;<a href="{{route('admin.instructores.create')}}" class="btn btn-outline-primary"><i class="fa fa-plus"></i> </a> </h1>
    </div>
    <div class="container table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Documento</th>
                <th>Clave</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                @forelse ($instructores as $item)
                <tr>
                    <td>{{$item->IdInstructor}}</td>
                    <td>{{$item->Nombre}}</td>
                    <td>{{$item->Apellido}}</td>
                    <td>{{$item->Documento}}</td>
                    <td>{{$item->Clave}}</td>
                    <td>{{$item->Estado}}</td>
                    <td><a href="{{route('admin.instructores.edit', $item->IdInstructor)}}" class="btn btn-warning"> <i class="fa fa-pencil"></i> </a> </td>
                <td><a href="{{route('admin.instructores.destroy', $item->IdInstructor)}}" class="btn btn-danger" onclick="return confirm('¿Esta seguro de eliminar este registro?')"><i class="fa fa-remove"></i> </a> </td>
                </tr>
                @empty
                    
                @endforelse
              
            </tbody>
        </table>
        {{$instructores->links()}}
    </div>

@endsection