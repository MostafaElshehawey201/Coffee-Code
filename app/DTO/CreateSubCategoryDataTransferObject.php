<?php
    namespace App\DTO;

    class CreateSubCategoryDataTransferObject{
        public $category_id;
        public $title_ar;
        public $title_en;
        public $body_ar;
        public $body_en;
        public function __construct($data , $category_id)
        {
            $this->title_ar = $data['title_ar'] ?? null ;
            $this->title_en = $data['title_en'] ?? null ;
            $this->body_ar = $data['body_ar']   ?? null ;
            $this->body_en = $data['body_en']   ?? null ;
            $this->category_id = $category_id;
        }
    }
?>