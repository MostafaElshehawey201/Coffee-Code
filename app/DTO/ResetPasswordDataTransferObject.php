<?php
    namespace App\DTO;
    class ResetPasswordDataTransferObject{
        public $password;
        public function __construct($password)
        {
            $this->password = $password['password'];
        }
    }
?>