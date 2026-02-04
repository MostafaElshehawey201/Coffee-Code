<?php

namespace App\Exceptions\Auth;

use Exception;
use Throwable;

class PhoneAlreadyUsedException extends Exception
{
    public function __construct(int $code = 422)
    {
        return parent::__construct(__('validation.phone.used'), $code);
    }
}
