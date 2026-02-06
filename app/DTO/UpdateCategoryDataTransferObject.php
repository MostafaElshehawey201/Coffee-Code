<?php

namespace App\DTO;

class UpdateCategoryDataTransferObject
{
    public $title_ar;
    public $title_en;
    public $body_ar;
    public $body_en;

    public function __construct($data)
    {
        $this->title_ar = $data['title_ar'] ?? null;
        $this->title_en = $data['title_en'] ?? null;
        $this->body_ar  = $data['body_ar'] ?? null;
        $this->body_en  = $data['body_en'] ?? null;
    }
}
