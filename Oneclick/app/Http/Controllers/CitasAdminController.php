<?php

namespace App\Http\Controllers;

use App\Citas;
use Illuminate\Http\Request;

class CitasAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas = Citas::paginate(6);
        return view ('admin.citas.index', compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Display the specified resource.
     *
     * @param  \App\CitasAdmin  $citasAdmin
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CitasAdmin  $citasAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $citas = Citas::findOrFail($id);
        return view ('admin.citas.edit', compact('citas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CitasAdmin  $citasAdmin
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $citas = Citas::findOrFail($id);
        $citas->update([
            'nombre'=>request('nombre'),
            'apellido'=>request('apellido'),
            'fecha'=>request('fecha'),
            'hora'=>request('hora')
        ]);
    
        return redirect()->route('admin.citas.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CitasAdmin  $citasAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $citas = Citas::findOrFail($id);
        $citas->delete();

        return redirect()->route('admin.citas.index');
    }
}
