<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    // table
    protected $table = 'videos';
    public $timestamps = false;
    use HasFactory;

    // one to many relationship with Usuarios
    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuarios', 'subidopor');
    }
}
