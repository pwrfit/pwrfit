<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = 'usuarios';
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['nombre', 'rol_id', 'documento', 'email', 'password', 'membresia_id', 'dificultad_seleccionada', 'pago', 'email_verified_at'];

    // one to many relationship with Roles
    public function rol()
    {
        return $this->belongsTo('App\Models\Roles');
    }

    // one to many relationship with Membresia
    public function membresia()
    {
        return $this->belongsTo('App\Models\Membresia');
    }

    // one to many relationship with Uploads
    public function uploads()
    {
        return $this->hasMany('App\Models\Uploads', 'id');
    }

    // one to many relationship with Comentarios
    public function comentarios()
    {
        return $this->hasMany('App\Models\Comentarios', 'id');
    }

    // one to many relationship with Videos
    public function videos()
    {
        return $this->hasMany('App\Models\Videos', 'id');
    }
}
