<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DepartamentoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => [
                'type' => 'departamento',
                'id' => $this->id,
                'uuid' => $this->uuid,
                'attributes' => [
                    'nombre' => $this->nombre,
                    'activo' => $this->activo,
                ],
                'links' => [
                    'self' => url('/admin/departamento/' . $this->uuid),
                ],
            ]
        ];
    }
}
