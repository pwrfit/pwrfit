<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    public $timestamps = false;
    use HasFactory;

    // one to many relationship with Usuarios
    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuarios', 'usuario_id');
    }

    // one to many relationship with Videos
    public function video()
    {
        return $this->belongsTo('App\Models\Videos', 'video_id');
    }
}
