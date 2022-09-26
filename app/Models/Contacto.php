<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nombre', 'correo', 'mensaje']; //los puede manipular el usuario y no hay problema
}
