<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Upload;
use App\Models\Usuarios;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Owenoj\LaravelGetId3\GetId3;


class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categorias::all();
        return view('upload.index', compact('categorias'));
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
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function show(Upload $upload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function edit(Upload $upload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function pendienteUpdate(Request $request, Upload $upload, $id)
    {
        $upload = Upload::find($id);
        $upload->created_at = Carbon::now();
        $upload->aprobado = true;
        $upload->save();
        return redirect()->route('videos.pendientes')->with('success', 'El video ha sido aprobado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function pendienteDelete(Upload $upload, $id)
    {
        $upload = Upload::find($id);
        $upload->delete();
        DB::statement('ALTER TABLE videos AUTO_INCREMENT = 1');
        return redirect()->route('videos.pendientes')->with('deleted', 'El video ha sido rechazado');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'thumbnail' => 'required|file|mimes:jpeg,png,jpg,gif,svg',
                'video' => 'required|file|mimes:mp4,mov,ogg,qt',
            ]
        );


        $thumbnail = $request->file('thumbnail');
        $video = $request->file('video');
        $thumbnailName = time() . '.' . $thumbnail->getClientOriginalExtension();
        $videoName = time() . '.' . $video->getClientOriginalExtension();
        $thumbnail->move(public_path('videos/miniaturas'), $thumbnailName);
        $video->move(public_path('videos/videos'), $videoName);
        $getID3 = new GetID3('videos/videos/' . $videoName);






        $upload = new Upload;
        $upload->subidopor = auth()->user()->id;
        $upload->titulo = $request->title;
        $upload->descripcion = $request->description;
        $upload->miniaturasrc = $thumbnailName;
        $upload->videosrc = $videoName;
        $upload->duracion = $getID3->getPlaytime();
        $upload->created_at = now();
        $upload->save();
        return redirect()->route('upload')->with('success', 'Su video ha sido subido correctamente y está en espera de aprobación');
    }

    public function pendiente()
    {
        $uploads = Upload::where('aprobado', 0)->get();
        return view('upload.pendiente', compact('uploads'));
    }

    public function pendienteView($id)
    {
        $upload = Upload::find($id);
        $time = ucfirst(Carbon::parse($upload->created_at)->diffForHumans());
        return view('upload.pendienteView', compact('upload', 'time'));
    }

    public function subido()
    {
        $uploads = Upload::where('aprobado', 1)->get();
        return view('upload.subido', compact('uploads'));
    }
}
