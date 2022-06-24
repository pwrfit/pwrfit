<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;

class CategoriasController extends Controller
{
    public function index(Request $request)
    {
        $categorias = Categorias::all();
        return view('categorias', compact('categorias'));
    }
}
