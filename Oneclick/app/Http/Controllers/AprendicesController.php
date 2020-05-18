<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aprendices;
use App\Programas;

class AprendicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aprendices = \DB::table('usuario')
        ->join('programa','programa.Idprograma','usuario.IdPrograma')
        ->select('usuario.IdUsuario','usuario.Nombre','programa.Nombre as pro','usuario.Apellido','usuario.Telefono','usuario.Documento','usuario.Genero','usuario.Correo')
        ->paginate(6);

        return view('admin.aprendices.index', compact('aprendices'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programa = Programas::OrderBy('Nombre','asc')->get();
        return view('admin.aprendices.create', compact('programa'));


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
        Aprendices::create([
            'IdPrograma'=>request('programa'),
            'Nombre'=>request('Nombre'),
            'Apellido'=>request('Apellido'),
            'Telefono'=>request('Telefono'),
            'Documento'=>request('Documento'),
            'Genero'=>request('Genero'),
            'Correo'=>request('Correo')
            
        ]);

        return redirect()->route('admin.aprendices.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id)
    {
        $aprendices = Aprendices::findOrFail($Id);
        $programa = Programas::orderBy('Nombre','asc')->get();

        return view('admin.aprendices.edit')->with('aprendices',$aprendices)->with('programa',$programa);

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
        $aprendices = Aprendices::findOrFail($Id);
        $aprendices->update([
            'IdPrograma'=>request('programa'),
            'Nombre'=>request('Nombre'),
            'Apellido'=>request('Apellido'),
            'Telefono'=>request('Telefono'),
            'Documento'=>request('Documento'),
            'Genero'=>request('Genero'),
            'Correo'=>request('Correo')
        ]);
            return redirect()->route('admin.aprendices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id)
    {
        //
        $aprendices = Aprendices::findOrFail($Id);
        $aprendices->delete();

        return redirect()->route('admin.aprendices.index');
    }
}
