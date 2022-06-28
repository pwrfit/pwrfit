<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Roles;
use App\Models\Upload;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $categorias = Categorias::all();
        $roles = Roles::all();
        $usuarios = Usuarios::all();
        $usuario = Auth::user();
        $subidos = Upload::where('aprobado', 1)->get()->sortByDesc('created_at');
        $pendientes = Upload::where('aprobado', 0)->get();
        return view('dashboard.dashboard', compact('categorias', 'roles', 'usuarios', 'subidos', 'pendientes', 'usuario'));
    }
}
