@extends('admin.dashboard')
@section('content')
    <div class="container">
        <div class="container">
        <h1> <strong>Aprendices</strong> &nbsp;<a href="{{route('admin.aprendices.create')}}" class="btn btn-outline-primary"><li class="fa fa-plus"></li> </a> </h1>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Programa</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Documento</th>
                    <th>Genero</th>
                    <th>Correo</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                    @forelse ($aprendices as $item)
                        <tr>
                            <td>{{$item->IdUsuario}}</td>
                            <td>{{$item->Nombre}}</td>
                            <td>{{$item->pro}}</td>
                            <td>{{$item->Apellido}}</td>
                            <td>{{$item->Telefono}}</td>
                            <td>{{$item->Documento}}</td>
                            <td>{{$item->Genero}}</td>
                            <td>{{$item->Correo}}</td>
                        <td><a class="btn btn-warning" href="{{route('admin.aprendices.edit', $item->IdUsuario)}}"> <i class="fa fa-pencil"></i> </a></td>
                        <td><a class="btn btn-danger"   onclick="return confirm('¿esta seguro de eliminar este registro?')" href="{{route('admin.aprendices.destroy', $item->IdUsuario )}}"> <i class="fa fa-remove"></i> </a></td>
                    </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
            {{$aprendices->links()}}
        </div>
    </div>
@endsection