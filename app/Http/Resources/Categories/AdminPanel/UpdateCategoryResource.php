<?php

namespace App\Http\Resources\Categories\AdminPanel;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UpdateCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"    => $this->id,
            "user"  => $this->user->name,
            "title" => $this->translate('title'),
            "body"  => $this->translate('body'),
        ];
    }
}
