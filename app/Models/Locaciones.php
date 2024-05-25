<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locaciones extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre', 'direccion', 'capacidad'
    ];

    public function conciertos()
    {
        return $this->hasMany(Conciertos::class);
    }
}
