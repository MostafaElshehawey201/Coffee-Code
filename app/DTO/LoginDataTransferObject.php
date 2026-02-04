<?php
    namespace App\Dto;

    class LoginDataTransferObject{
        public $login;
        public $password;
        public function __construct($data)
        {
            $this->login = $data['login'];
            $this->password =$data['password'];
        }
    }
?>