<?php

namespace App\Http\Controllers;

use App\Models\Membresia;
use App\Models\Roles;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuarios::all();
        return view('usuarios', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Roles::all();
        $membresias = Membresia::all();
        return view('usuarios.create', compact('roles', 'membresias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuarios();
        $usuario->nombre = $request->nombre;
        $usuario->documento = $request->documento;
        $usuario->email = $request->email;
        $usuario->password = bcrypt($request->password);
        $usuario->rol_id = $request->rol;
        $usuario->email_verified_at = now();
        $usuario->pago = "SIN COMPLETAR";
        $usuario->membresia_id = $request->membresia;
        $usuario->save();
        return redirect('/usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuarios $usuarios, $id)
    {
        $usuario = Usuarios::find($id);
        $roles = Roles::all();
        $membresias = Membresia::all();
        return view('usuarios.edit', compact('usuario', 'roles', 'membresias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuarios $usuarios, $id)
    {
        $usuario = Usuarios::find($id);
        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->rol_id = $request->rol;
        $usuario->membresia_id = $request->membresia;
        $usuario->save();
        return redirect('/usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuarios::find($id);
        $usuario->delete();
        DB::statement('ALTER TABLE usuarios AUTO_INCREMENT = 1');
        return redirect('/usuarios')->with('success', 'Usuario eliminado correctamente');
    }
}
