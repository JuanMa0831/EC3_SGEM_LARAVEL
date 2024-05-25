<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conciertos extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre', 'fecha', 'locacion_id', 'estado', 'cantidad_entradas', 'entradas_vendidas'
    ];

    public function locacion()
    {
        return $this->belongsTo(Locaciones::class);
    }

    public function entradas()
    {
        return $this->hasMany(Entradas::class);
    }

    public function artistas()
    {
        return $this->belongsToMany(Artistas::class, 'concierto_artista');
    }
}
