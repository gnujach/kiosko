<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class RequisitoListCollection extends ResourceCollection
{
    public $collects = Requisito::class;
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray($request): array
    {
        return [
            'message'       => 'Todos los Requisitos',
            'requisitos'     =>  $this->collection,
        ];
    }
}
