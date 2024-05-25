<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entradas extends Model
{
    use HasFactory;
    protected $fillable = [
        'concierto_id', 'cliente_id', 'precio', 'fecha_compra'
    ];

    public function concierto()
    {
        return $this->belongsTo(Conciertos::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Clientes::class);
    }
}
