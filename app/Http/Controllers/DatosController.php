<?php

namespace App\Http\Controllers;

use App\Models\Datos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DatosController extends Controller
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->edad) {
            Datos::create([
                'documento' => Auth::user()->documento,
                'edad' => $request->edad,
                'peso' => 0,
                'altura' => 0,
                'genero' => '',
                'imc' => 0,
            ]);
            return view('primerospasos');
        } else {
            if ($request->peso) {
                DB::table('datos')
                    ->where('documento', Auth::user()->documento)
                    ->update(['peso' => $request->peso, 'altura' => $request->altura, 'imc' => round(($request->peso)/($request->altura*$request->altura), 2)]);
                    return view('primerospasos');
            } else {
                if ($request->genero) {
                    DB::table('datos')
                        ->where('documento', Auth::user()->documento)
                        ->update(['genero' => $request->genero]);
                    $datos = DB::table('datos')
                            ->select('datos.*')
                            ->where('documento', Auth::user()->documento);
                    $datos = $datos->get();
                    foreach ($datos as $dato) {
                        $imc = $dato->imc;
                    }
                    if ($imc<18.5) {
                        $dificultad = "Principiante";
                        $id_dificultad = 1;
                    } else {
                        if ($imc>=18.5 and $imc<=24.99) {
                            $dificultad = "Intermedio";
                            $id_dificultad = 2;
                        } else {
                            $dificultad = "Principiante";
                            $id_dificultad = 1;
                        }
                    }
                    DB::update('update usuarios set dificultad_seleccionada = ? where documento = ?', [$id_dificultad, Auth::user()->documento]);

                    return view('primerospasos')->with('datos', $datos)->with('dificultad', $dificultad)->with('imc', $imc);
                }else {
                    return redirect('dashboard');
                }

            }

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datos  $datos
     * @return \Illuminate\Http\Response
     */
    public function show(Datos $datos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datos  $datos
     * @return \Illuminate\Http\Response
     */
    public function edit(Datos $datos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datos  $datos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datos $datos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datos  $datos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datos $datos)
    {
        //
    }
}
