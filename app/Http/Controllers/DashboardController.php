<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $numcategorias = Categorias::all();
        $i = 0;
        foreach ($numcategorias as $numcategorias) {
            $i += 1;
        }
        $numcategorias = $i;
        return view('dashboard.dashboard', compact('numcategorias'));
    }

    public function usuarios(Request $request)
    {
        return view('dashboard.usuarios');
    }
}
