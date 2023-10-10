<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;

class Departamento extends Model
{
    use HasFactory, HasUuid;
    protected $fillable = [
        'nombre',
        'activo',
        'uuid',
        'by'
    ];

    public function tramite()
    {
        return $this->hasMany(Tramite::class);
    }
}
