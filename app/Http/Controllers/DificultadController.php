<?php

namespace App\Http\Controllers;

use App\Models\Dificultad;
use Illuminate\Http\Request;

class DificultadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('primerospasos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dificultad  $dificultad
     * @return \Illuminate\Http\Response
     */
    public function show(Dificultad $dificultad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dificultad  $dificultad
     * @return \Illuminate\Http\Response
     */
    public function edit(Dificultad $dificultad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dificultad  $dificultad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dificultad $dificultad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dificultad  $dificultad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dificultad $dificultad)
    {
        //
    }
}
