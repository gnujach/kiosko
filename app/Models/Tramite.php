<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;

class Tramite extends Model
{
    use HasFactory, HasUuid;

    protected $fillable = [
        'nombre',
        'objetivo',
        'fundamento_jur',
        'casos',
        'modalidad',
        'plazo_respuesta',
        'costo',
        'tipo_usuario',
        'activo',
        'url_proceso',
        'departamento_id',
        'uuid',
        'by',
        'ser_recibido',
        'tipo'
    ];

    /**
     * Un tramite pertenece a un departamento
     */
    public function departamento(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Departamento::class);
    }

    /**
     * Un tramite puede tener muchos requisitos
     */
    public function requisitos(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Requisito::class);
    }
}
