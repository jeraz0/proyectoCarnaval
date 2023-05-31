<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\User;

class personaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index',compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nombres'=>'required',
            'apellidos'=>'required',
            'cedula'=>'required',
            'celular'=>'required',
            'correo'=>'required',
            'id_Propuesta'=>'required'
        ]);

        $coordinacion = new Persona();
        $coordinacion->nombres = $validateData['nombres'];
        $coordinacion->apellidos = $validateData['apellidos'];
        $coordinacion->cedula = $validateData['cedula'];
        $coordinacion->celular = $validateData['celular'];
        $coordinacion->correo = $validateData['correo'];
        $coordinacion->id_Propuesta = $validateData['id_Propuesta'];
        $coordinacion->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $persona = Persona::findOrFail($id);
        $persona->nombres = $request->input('nombres');
        $persona->apellidos = $request->input('apellidos');
        $persona->cedula = $request->input('cedula');
        $persona->celular = $request->input('celular');
        $persona->correo = $request->input('correo');
        $persona->id_Propuesta=$request->input('id_Propuesta');
        $persona->save();
        session()->flash('message', 'Se actualizó la persona con exito!');
        session()->flash('color', 'info');
        return redirect()->route('persona.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $persona = Persona::findOrFail($id);
        $persona->delete();
        session()->flash('message', 'Registro eliminado correctamente!');
        session()->flash('color', 'danger');
        return redirect()->action([DocenteController::class, 'index']);
    }
}
