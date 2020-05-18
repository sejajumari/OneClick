<?php

namespace App\Http\Controllers;

use App\Citas;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('citas.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Citas::create([
			'nombre' => request('nombre'),
            'apellido'=>request('apellido'),
            'fecha' => request('fecha'),
            'hora' => request('hora'),
		]);

		return redirect()->route('citas.create')
            ->with('msg', 'Se agendo su cita correctamente');    
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Citas  $citas
     * @return \Illuminate\Http\Response
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Citas $citas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Citas $citas)
    {
        //
    }
}
