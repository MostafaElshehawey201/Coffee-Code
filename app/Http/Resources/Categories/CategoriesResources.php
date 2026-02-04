<?php

namespace App\Http\Resources\Categories;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoriesResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "categories" => [
                "id" => $this->id,
                "title" => $this->translate('title'),
                "body" => $this->translate('body'),
                "created_at" => $this->created_at,
            ]
        ];
    }
}
