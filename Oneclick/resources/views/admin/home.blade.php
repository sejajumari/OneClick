@extends('admin.dashboard')
@section('content')

    <div class="container text-center">
        <div class="">
            <h1><i class="fa fa-briefcase"></i> Mi panel de administracion</h1>
        </div>

        <h2>Bienvenido(a) {{ Auth::user()->name }} Al panel de administracion de oneclick</h2>
       
        <div class="row">

            <div class="col-md-6">
                <div class="">
                    <i class="fa fa-calendar icon-home"></i>
                <a href="{{route('admin.citas.index')}}" class="btn btn-primary btn-block btn-home-admin">Citas</a>
            </div>
            </div>

            <div class="col-md-6">
                <div class="">
                    <i class="fa fa-user icon-home"></i>
                <a href="{{route('admin.instructores.index')}}" class="btn btn-primary btn-block btn-home-admin">Instructores</a>
                </div>
            </div>
        </div>   
        <div class="row">

            <div class="col-md-6">
                <div class="">
                    <i class="fa fa-user icon-home"></i>
                <a href="{{route('admin.aprendices.index')}}" class="btn btn-primary btn-block btn-home-admin">Aprendices</a>
            </div>
            </div>

            <div class="col-md-6">
                <div class="">
                    <i class="fa fa-play icon-home"></i>
                <a href="{{route('admin.actividad.index')}}" class="btn btn-primary btn-block btn-home-admin">Actividades</a>
                </div>
            </div>
        </div>   
        <div class="row">

            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-pencil icon-home"></i>
                <a href="{{route('admin.seguimientos.index')}}" class="btn btn-primary btn-block btn-home-admin">Seguimientos</a>
            </div>
            </div>
            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-pencil icon-home"></i>
                <a href="{{route('admin.asistencia.index')}}" class="btn btn-primary btn-block btn-home-admin">Asistencia</a>
                </div>
            </div>
        </div> 
        <div class="row">

            <div class="col-md-6">
                <div class="">
                    <i class="fa fa-play icon-home"></i>
                <a href="{{route('admin.programas.index')}}" class="btn btn-primary btn-block btn-home-admin">Programas</a>
            </div>
            </div>
        </div> 
    </div>
    <style>
        .icon-home
{
    color: #666;
    font-size: 60px;
    margin: 20px;
}
.btn-home-admin
{
    font-size: 25px;
}
</style>

@endsection