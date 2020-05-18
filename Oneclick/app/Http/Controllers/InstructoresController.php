<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructores;

class InstructoresController extends Controller
{
    //
    public function index(){

        $instructores = Instructores::paginate(6);
        return view('admin.instructores.index', compact('instructores'));
        
    }

    public function create(){

        return view ('admin.instructores.create');

    }

    public function store(){

        Instructores::create([
            'Nombre'=>request('Nombre'),
            'Apellido'=>request('Apellido'),
            'Documento'=>request('Documento'),
            'Clave'=>request('Clave'),
            'Estado'=>request('Estado'),
        ]);

        return redirect()->route('admin.instructores.index');
    }


    public function edit($Id){

        $instructores = Instructores::findOrfail($Id);
        return view ('admin.instructores.edit', compact('instructores'));

    }

    public function update($Id){

        $instructores = Instructores::findOrFail($Id);

        $instructores->update([
            'Nombre'=>request('Nombre'),
            'Apellido'=>request('Apellido'),
            'Documento'=>request('Documento'),
            'Clave'=>request('Clave'),
            'Estado'=>request('Estado')
        ]);

        return redirect()->route('admin.instructores.index');

    }

    public function destroy($Id){

        $instructores = Instructores::findOrFail($Id);
        $instructores->delete();

        return redirect()->route('admin.instructores.index');
    }

}

