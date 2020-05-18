@extends('admin.dashboard')
@section('content')

    <div class="container ">
        <h1><strong>Programas</strong>
            <a href="{{ route('admin.programas.create') }}" class="btn btn-outline-primary"><li class="fa fa-plus"></li> </a>
        </h1>
    </div>

<div class="container justify-content-center">
    <div class="table responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Modalidad</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
                <tbody>
                @forelse ($programas as $item)
                    <tr>
                        <td>{{ $item->IdPrograma }}</td>
                        <td>{{ $item->Nombre }}</td>
                        <td>{{ $item->ModalidadPrograma }}</td>
                        <td><a href="{{ route('admin.programas.edit', $item->IdPrograma)}}" class="btn btn-warning"><li class="fa fa-pencil"></li></a></td>
                         <td><a href="{{ route('admin.programas.destroy', $item->IdPrograma)}}" class="btn btn-danger" onclick="return confirm('¿Esta seguro de eliminar este registro?')"><li class="fa fa-remove"></li></a></td>

                    </tr>
                @empty
                    <h3>No hay programas</h3>
                @endforelse
                </tbody>
         </table>
         {{ $programas->links() }}
    </div>
</div>   
@endsection