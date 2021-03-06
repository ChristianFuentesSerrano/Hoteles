<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacione extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'tipo',
        'descripcion',
        'capacidad',
        'precio',
        'ocupacion'
    ];
}
