<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FilmeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'identify' => $this->id,
            'nome' => $this->nome,
            'duracao' => $this->duracao,
            'classificacao' => $this->classificacao,
            'descricao' => $this->descricao,
            'link' => $this->link,
            
        ];
    }
}
