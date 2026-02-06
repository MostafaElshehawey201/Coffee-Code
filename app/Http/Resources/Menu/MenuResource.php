<?php

namespace App\Http\Resources\Menu;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MenuResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "sub_category_id" => $this->sub_category_id,
            "is_active" => $this->is_active,
            "title" => $this->translate('title'),
            "body" => $this->translate('body'),
        ];
    }
}
