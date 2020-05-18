<?php

namespace App\Http\Controllers;

use App\Seguimientos;
use App\Aprendices;
use App\Instructores;
use DB;
use Illuminate\Http\Request;

class SeguimientosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seguimientos = \DB::table('seguimiento')
        ->join('usuario','usuario.IdUsuario', '=', 'seguimiento.IdUsuario')
        ->join('instructor','instructor.IdInstructor', '=', 'seguimiento.IdInstructor') 
        ->select('usuario.Nombre as aprendiz','instructor.Nombre as instru','seguimiento.IdSeguimiento','seguimiento.Fecha','seguimiento.Peso','seguimiento.Talla')
        ->paginate(6);

         return view ('admin.seguimientos.index', compact('seguimientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aprendices = Aprendices::orderBy('Nombre','asc')->get();
        $instructores = Instructores::orderBy('nombre','asc')->get();
        return view ('admin.seguimientos.create', compact('aprendices','instructores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Seguimientos::create([
            'IdUsuario'=>request('aprendices'),
            'IdInstructor'=>request('instructores'),
            'Fecha'=>request('Fecha'),
            'Peso'=>request('Peso'),
            'Talla'=>request('Talla')
        ]);

        return redirect()->route('admin.seguimientos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seguimientos  $seguimientos
     * @return \Illuminate\Http\Response
     */
    public function show(Seguimientos $seguimientos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seguimientos  $seguimientos
     * @return \Illuminate\Http\Response
     */
    public function edit($Id)
    {
        //
        $seguimientos = Seguimientos::findOrFail($Id);
        $aprendices = Aprendices::orderBy('Nombre','asc')->get();
        $instructores = Instructores::orderBy('nombre','asc')->get();

        return view ('admin.seguimientos.edit')
         ->with('seguimientos',$seguimientos)->with('aprendices',$aprendices)->with('instructores',$instructores);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seguimientos  $seguimientos
     * @return \Illuminate\Http\Response
     */
    public function update($Id)
    {
        $seguimientos = Seguimientos::findOrFail($Id);
        $seguimientos->update([
            'IdUsuario'=>request('aprendices'),
            'IdInstructor'=>request('instructores'),
            'Fecha'=>request('Fecha'),
            'Peso'=>request('Peso'),
            'Talla'=>request('Talla')
        ]);

        return redirect()->route('admin.seguimientos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seguimientos  $seguimientos
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id)
    {
        $seguimientos = Seguimientos::findOrFail($Id);
        $seguimientos->delete();

        return redirect()->route('admin.seguimientos.index');
    }
}
