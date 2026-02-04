<?php
    namespace App\DTO;

    class CheckOtpPasswordDataTransferObject{
        public $checkOtp;
        public function __construct($checkOtp)
        {
            $this->checkOtp = $checkOtp;
        }
    }
?>