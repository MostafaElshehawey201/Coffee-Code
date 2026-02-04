<?php
    namespace App\DTO;

    class ForgetPasswordDataTransferObject{
        public $login;
        public function __construct($login){
            $this->login = $login;
        }
    }
?>