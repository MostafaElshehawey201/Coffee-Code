<?php

namespace App\Exceptions\Auth;

use Exception;

class PasswordIsErrorException extends Exception
{
    public function __construct($code = 404){
        return Parent::__construct(__('validation.password.error') , $code);
    }
}
