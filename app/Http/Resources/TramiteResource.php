<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\DepartamentoResource;
use App\Http\Resources\RequisitoCollection;

class TramiteResource extends JsonResource
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
                'type' => 'tramite',
                'id' => $this->id,
                'uuid' => $this->uuid,
                'departamento' => new DepartamentoResource($this->whenLoaded('departamento')),
                'requisitos' => new RequisitoCollection($this->whenLoaded('requisitos')),
                'attributes' => [
                    'nombre' => strtolower($this->nombre),
                    'objetivo' => $this->objetivo,
                    'departamento_id' => $this->departamento_id,
                    'fundamento_jur' => $this->fundamento_jur,
                    'tipo' => $this->tipo,
                    'ser_recibido' => $this->ser_recibido,
                    'casos' => $this->casos,
                    'modalidad' => $this->modalidad,
                    'plazo_respuesta' => $this->plazo_respuesta,
                    'costo' => $this->costo,
                    'tipo_usuario' => $this->tipo_usuario,
                    'activo' => $this->activo,
                    'url_proceso' => $this->url_proceso,
                    'updated' => $this->updated_at->format('d-m-Y'),
                ],
                'links' => [
                    'self' => url('/admin/tramite/' . $this->uuid),
                ],
            ]
        ];
    }
}
