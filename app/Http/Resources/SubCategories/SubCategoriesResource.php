<?php

namespace App\Http\Resources\SubCategories;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubCategoriesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return  [
            "id" => $this->id,
            "is_active" => $this->is_active,
            "title" => $this->translate('title'),
            "body" => $this->translate('body'),
            "created_at" => $this->created_at
        ];
    }
}
