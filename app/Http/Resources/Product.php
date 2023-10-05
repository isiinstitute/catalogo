<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'titulo' => $this->titulo,
            'precio' => $this->precio,
            'imagen' => $this->imagen,
            'categoria_id' => $this->categoria_id,
            'marca_id' => $this->marca_id,
            'user_id' => $this->user_id,
            'user' => $this->user->name,
            'marca' => $this->marca->nombre,
            'categoria' => $this->categoria->nombre,
        ];
    }
}
