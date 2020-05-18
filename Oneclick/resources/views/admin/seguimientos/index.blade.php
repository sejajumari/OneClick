@extends('admin.dashboard')
@section('content')
<div class="container">
    <h1><strong>Seguimientos</strong>&nbsp;<a href="{{route('admin.seguimientos.create')}}" class="btn btn-outline-primary"><i class="fa fa-plus"></i></a> </h1>
</div>
<div class="container table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <th>Codigo</th>
            <th>Aprendiz</th>
            <th>Instructor</th>
            <th>Fecha</th>
            <th>Peso</th>
            <th>Talla</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            @forelse ($seguimientos as $item)
                <tr>
                    <td>{{$item->IdSeguimiento}}</td>
                    <td>{{$item->aprendiz}}</td>
                     <td>{{$item->instru}}</td> 
                    <td>{{$item->Fecha}}</td>
                    <td>{{$item->Peso}}</td>
                    <td>{{$item->Talla}}</td>
                    <td><a href="{{route('admin.seguimientos.edit',$item->IdSeguimiento)}}" class="btn btn-warning"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="{{ route('admin.seguimientos.destroy',$item->IdSeguimiento) }}" class="btn btn-danger" onclick="return confirm('¿Esta seguro de eliminar este registro?')" ><i class="fa fa-remove"></i></a></td>
                </tr>
            @empty
                
            @endforelse
        </tbody>
    </table>
    {{$seguimientos->links()}}
</div>
    
@endsection