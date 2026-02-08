<?php
    namespace App\DTO;

    class CreateMenuDataTransferObject{
        public $title_ar ;
        public $title_en ;
        public $body_ar ;
        public $body_en ;

        public function __construct($data)
        {
            $this->title_ar = $data['title_ar'];
            $this->title_en = $data['title_en'];
            $this->body_ar = $data['body_ar'];
            $this->body_en = $data['body_en'];
        }

    }
?>