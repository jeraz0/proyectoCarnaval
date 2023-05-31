<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Propuesta;
use Illuminate\Http\Request;

class categoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('inicio');
    }

    public function desfiles()
    {
        
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
            'nombre'=>'required'
        ]);
        $categoria = new Categoria();
        $categoria->nombre = $validateData['nombre'];
        $categoria->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if($id == 'Desfiles')
        {
        $propuestas = Propuesta::where('id_categoria', '1')->paginate(1);
        return view('categorias.desfiles',compact('propuestas'));
        }
        else if($id=='Tablados')
        {
            $propuestas = Propuesta::where('id_categoria', '2')->paginate(1);
            return view('categorias.tablados',compact('propuestas'));
        }
        else if($id=='Gastronomia')
        {
            $propuestas = Propuesta::where('id_categoria', '3')->paginate(1);
            return view('categorias.gastronomia',compact('propuestas'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        return view("categoria.edit", compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->nombre = $request->input('nombre');
        $categoria->save();
        session()->flash('message', 'Se actualizó el docente con exito!');
        session()->flash('color', 'info');
        return redirect()->route('categoria.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();
        session()->flash('message', 'Registro eliminado correctamente!');
        session()->flash('color', 'danger');
        return redirect()->action([CategoriaController::class, 'index']);
    }
}
