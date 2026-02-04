<?php
    namespace App\DTO;

    class UpdateUserDataTransferObject{
        public $name;
        public $email;
        public $phone;
        public function __construct( $validation)
        {
            $this->name = $validation['name'] ?? null;
            $this->email = $validation['email'] ?? null;
            $this->phone = $validation['phone'] ?? null;
        }
    }
?>