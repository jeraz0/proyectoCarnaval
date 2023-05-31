<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Propuesta;

class propuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Propuesta::all(),200);

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
            'nombrePropuesta'=>'required',
            'descripcion'=>'required',
            'id_Categoria'=>'required',
            'imagenovideo'=>'required',
            'fecha'=>'required'
        ]);

        $coordinacion = new Propuesta();
        $coordinacion->nombrePropuesta = $validateData['nombrePropuesta'];
        $coordinacion->descripcion = $validateData['descripcion'];
        $coordinacion->id_Categoria = $validateData['id_Categoria'];
        $coordinacion->imagenovideo = $validateData['imagenovideo'];
        $coordinacion->calificacion = 0;
        $coordinacion->fecha = $validateData['fecha'];
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
        $propuesta = Propuesta::findOrFail($id);
        return view("propuesta.edit", compact('propuesta'));
    }

    public function calificar(String $id, Request $request)
    {
        $vecesCalificado = 1;
        $propuesta = Propuesta::findOrFail($id);
        $calificacion = $request->input('calificacion');
        $calificacion = ($calificacion+$propuesta->calificacion)/$vecesCalificado;
        $vecesCalificado = $vecesCalificado+1;
        $propuesta->calificacion = $calificacion;
        $propuesta->save();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $propuesta = Propuesta::findOrFail($id);
        $propuesta->nombrePropuesta = $request->input('nombrePropuesta');
        $propuesta->descripcion = $request->input('descripcion');
        $propuesta->imagenovideo = $request->input('imagenovideo');
        $propuesta->calificacion = $propuesta->calificacion ;
        $propuesta->fecha = $request->input('fecha');
        $propuesta->id_Categoria = $request->input('id_Categoria');
        $propuesta->save();
        session()->flash('message', 'Se actualizó el docente con exito!');
        session()->flash('color', 'info');
        return redirect()->route('propuesta.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $propuesta = Propuesta::findOrFail($id);
        $propuesta->delete();
        session()->flash('message', 'Registro eliminado correctamente!');
        session()->flash('color', 'danger');
        return redirect()->action([PropuestaController::class, 'index']);
    }
}
