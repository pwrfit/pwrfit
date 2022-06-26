<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categorias::all();
        return view('categorias', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nombre' => 'required|string|max:255',
                'icono' => 'required|string|max:255',
                'color' => 'required|string|max:255',
            ]
        );

        $categorias = new Categorias;
        $categorias->nombrecat = $request->nombre;
        $categorias->icono = $request->icono;
        $categorias->color = $request->color;
        $categorias->save();
        return redirect()->route('categorias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    public function edit($id)
    {
        $categoria = Categorias::find($id);
        return view('categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'nombre' => 'required|string|max:255',
                'icono' => 'required|string|max:255',
                'color' => 'required|string|max:255',
            ]
        );
        $categoria = Categorias::find($id);
        $categoria->nombrecat = $request->nombre;
        $categoria->icono = $request->icono;
        $categoria->color = $request->color;
        $categoria->save();
        return redirect('categorias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categorias::find($id);
        $categoria->delete();
        DB::statement('ALTER TABLE categorias AUTO_INCREMENT = 1');
        return redirect('categorias')->with('success', 'Categoria eliminada correctamente');
    }
}
