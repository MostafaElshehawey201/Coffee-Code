<?php

namespace App\Http\Resources\Menu\AdminPanel;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CreateMenuResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "menu" => [
                "id" => $this->id,
                "title" => $this->translate('title'),
                "body" => $this->translate('body'),
            ]
        ];
    }
}
