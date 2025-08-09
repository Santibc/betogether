<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plantilla extends Model
{
    protected $table = 'plantillas';

    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    public function negocios()
    {
        return $this->belongsToMany(Negocio::class, 'plantilla_negocio', 'plantilla_id', 'empresa_id');
    }
}
