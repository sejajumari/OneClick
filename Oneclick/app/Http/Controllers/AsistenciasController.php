<?php

namespace App\Http\Controllers;

use App\Asistencias;
use App\Aprendices;
use App\Instructores;
use App\Actividades;
use Illuminate\Http\Request;

class AsistenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asistencia = \DB::table('asistencia')
        ->join('usuario','usuario.IdUsuario','=','asistencia.IdUsuario')
        ->join('actividad','actividad.IdActividad','=','asistencia.IdActividad')
        ->join('instructor','instructor.IdInstructor','=','asistencia.IdInstructor')
        ->select('asistencia.IdAsistencia','usuario.Nombre as aprendiz','actividad.Nombre as actividad','instructor.Nombre as instru','asistencia.ComponenteEstrategico','asistencia.Fecha','asistencia.Hora')
        ->paginate(6);

        return view ('admin.asistencia.index', compact('asistencia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aprendices = Aprendices::orderBy('Nombre','asc')->get();
        $instructores = Instructores::orderBy('Nombre','asc')->get();
        $actividades = Actividades::orderBy('Nombre','asc')->get();

        return view ('admin.asistencia.create')->with('aprendices',$aprendices)
        ->with('instructores',$instructores)->with('actividades',$actividades);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Asistencias::create([
            'IdUsuario'=>request('aprendices'),
            'IdInstructor'=>request('instructores'),
            'IdActividad'=>request('actividades'),
            'ComponenteEstrategico'=>request('Componente'),
            'Fecha'=>request('Fecha'),
            'Hora'=>request('Hora')
        ]);

        return redirect()->route('admin.asistencia.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Asistencias  $asistencias
     * @return \Illuminate\Http\Response
     */
    public function show(Asistencias $asistencias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Asistencias  $asistencias
     * @return \Illuminate\Http\Response
     */
    public function edit($Id)
    {
        $asistencia = Asistencias::findOrFail($Id);
        $aprendices = Aprendices::orderBy('Nombre','asc')->get();
        $instructores = Instructores::orderBy('Nombre','asc')->get();
        $actividades = Actividades::orderBy('Nombre','asc')->get();

        return view ('admin.asistencia.edit', compact('asistencia','aprendices','instructores','actividades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Asistencias  $asistencias
     * @return \Illuminate\Http\Response
     */
    public function update($Id)
    {
        $asistencia = Asistencias::findOrFail($Id);
        $asistencia->update([
            'IdUsuario'=>request('aprendices'),
            'IdInstructor'=>request('instructores'),
            'IdActividad'=>request('actividades'),
            'ComponenteEstrategico'=>request('Componente'),
            'Fecha'=>request('Fecha'),
            'Hora'=>request('Hora')
        ]);

        return redirect()->route('admin.asistencia.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Asistencias  $asistencias
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id)
    {
        $asistencia = Asistencias::findOrFail($Id);
        $asistencia->delete();

        return redirect()->route('admin.asistencia.index');
    }
}
