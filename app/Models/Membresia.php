<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membresia extends Model
{
    protected $table = 'membresia';
    public $timestamps = false;
    use HasFactory;

    // one to many relationship with Usuarios
    public function usuarios()
    {
        return $this->hasMany('App\Models\Usuarios');
    }
}
