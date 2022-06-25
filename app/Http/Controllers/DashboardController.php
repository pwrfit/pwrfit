<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Roles;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $categorias = Categorias::all();
        $roles = Roles::all();
        $usuarios = Usuarios::all();
        return view('dashboard.dashboard', compact('categorias', 'roles', 'usuarios'));
    }

    public function usuarios(Request $request)
    {
        return view('dashboard.usuarios');
    }
}
