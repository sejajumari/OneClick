<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Programas;
class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $programas = Programas::paginate(5);
        return view ('admin.programas.index', compact('programas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.programas.create');
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
        $programas = Programas::create([
            'Nombre'=> request('Nombre'),
            'ModalidadPrograma'=> request('ModalidadPrograma'),
        ]);

        return redirect()->route('admin.programas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id)
    {
        $programas = Programas::findOrFail($Id);
        return view ('admin.programas.edit', compact('programas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($Id)
    {
        //
        $programas = Programas::findOrFail($Id);

		$programas->update([
            'Nombre'=> request('Nombre'),
            'ModalidadPrograma'=> request('ModalidadPrograma'),
		 ]);

		return redirect()->route('admin.programas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id)
    {
        $programas = Programas::findOrFail($Id);
        $programas->delete();

        return redirect()->route('admin.programas.index');
    }
}
