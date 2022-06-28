<?php

namespace App\Http\Controllers;

use App\Models\Comentarios;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComentariosController extends Controller
{
    public function store(Request $request)
    {
        $comentario = new Comentarios();
        $comentario->usuario_id = $request->user_id;
        $comentario->video_id = $request->video_id;
        $comentario->comentario = $request->comentario;
        $comentario->created_at = Carbon::now();
        $comentario->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $comentario = Comentarios::find($id);
        $comentario->delete();
        DB::statement('ALTER TABLE comentarios AUTO_INCREMENT = 1');
        return redirect()->back();
    }
}
