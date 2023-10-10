<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmpleadoResource extends JsonResource
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
                'type' => 'Empleados en el sistema',
                'id' => $this->id,
                'attributes' => [
                    'name' => $this->name,
                    'departamento' => $this->departamento,
                    'puesto' => $this->puesto,
                    'email' => $this->email,
                    'ext' => $this->ext,
                    'img' => $this->img
                ],

            ]
        ];
    }
}
