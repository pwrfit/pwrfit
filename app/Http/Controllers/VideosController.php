<?php

namespace App\Http\Controllers;

use App\Models\Comentarios;
use App\Models\Upload;
use App\Models\Videos;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $usuario = Auth::user();
        $comentarios = Comentarios::where('video_id', $id)->get()->sortByDesc('created_at');
        $videos = Videos::find($id);
        $upload = Upload::find($id);
        return view('videos.index', compact('videos', 'comentarios', 'usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Videos  $videos
     * @return \Illuminate\Http\Response
     */
    public function show(Videos $videos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Videos  $videos
     * @return \Illuminate\Http\Response
     */
    public function edit(Videos $videos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Videos  $videos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Videos $videos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Videos  $videos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Videos $videos, $id)
    {
        // eliminar comentarios
        $comentarios = Comentarios::where('video_id', $id)->get();
        if ($comentarios->count() > 0) {
            foreach ($comentarios as $comentario) {
                $comentario->delete();
            }
        }
        // eliminar video
        $video = Videos::find($id);
        $video->delete();
        return redirect()->route('videos.subidos')->with('deleted', 'Video eliminado correctamente');
    }
}
