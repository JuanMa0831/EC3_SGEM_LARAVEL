<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artistas extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre', 'genero_musical'
    ];

    public function conciertos()
    {
        return $this->belongsToMany(Conciertos::class, 'concierto_artista');
    }
}
