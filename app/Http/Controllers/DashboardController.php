<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard.dashboard');
    }

    public function usuarios(Request $request)
    {
        return view('dashboard.usuarios');
    }

    public function categorias(Request $request)
    {
        return view('dashboard.categorias');
    }
}
