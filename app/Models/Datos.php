<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datos extends Model
{
    protected $table = 'datos';
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'documento',
        'edad',
        'peso',
        'altura',
        'genero',
        'imc',
    ];
}
