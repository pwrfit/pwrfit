<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Roles;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $categorias = Categorias::all();
        $roles = Roles::all();
        return view('dashboard.dashboard', compact('categorias', 'roles'));
    }

    public function usuarios(Request $request)
    {
        return view('dashboard.usuarios');
    }
}
