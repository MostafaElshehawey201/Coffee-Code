<?php
    namespace App\DTO;

    class RegisterDataTransferObject{
        public $name ;
        public $email;
        public $phone;
        public $password;
        public function __construct($data)
        {
            $this->name = $data['name'];
            $this->email = $data['email'];
            $this->phone = $data['phone'];
            $this->password = $data['password'];
        }
    }
?>