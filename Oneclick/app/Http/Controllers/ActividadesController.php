<?php

namespace App\Http\Controllers;

use App\Actividades;
use Illuminate\Http\Request;

class ActividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividades = Actividades::paginate(6);
        return view ('admin.actividad.index', compact('actividades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('admin.actividad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Actividades::create([
            'Nombre'=>request('Nombre')
        ]);

        return redirect()->route('admin.actividad.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function show(Actividades $actividades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function edit($Id)
    {
        $actividades = Actividades::findOrFail($Id);
        return view ('admin.actividad.edit', compact('actividades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function update($Id)
    {
        $actividades = Actividades::findOrFail($Id);
        $actividades->update([
            'Nombre'=>request('Nombre')
        ]);

        return redirect()->route('admin.actividad.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id)
    {
        $actividades = Actividades::findOrFail($Id);
        $actividades->delete();

        return redirect()->route('admin.actividad.index');
    }
}
