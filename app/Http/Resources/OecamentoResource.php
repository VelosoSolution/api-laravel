<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrcamentosResource extends JsonResource
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
            'cliente' => $this->cliente,
            'datahoraorcamento' => $this->datahoraorcamento,
            'vendedor' => $this->vendedor,
            'descricao' => $this->descricao,
            'valororcado' => $this->valororcado,
        ];
    }
}
