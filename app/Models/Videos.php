<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    protected $table = 'videos';
    use HasFactory;

    // one to many relationship with Comentarios
    public function comentarios()
    {
        return $this->hasMany('App\Models\Comentarios', 'id');
    }

    // one to many relationship with Usuarios
    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuarios', 'subidopor');
    }
}
