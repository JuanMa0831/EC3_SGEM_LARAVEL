<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conciertos extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'conciertos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'fecha',
        'estado',
        'cantidad_entradas',
        'entradas_vendidas'
    ];

}
