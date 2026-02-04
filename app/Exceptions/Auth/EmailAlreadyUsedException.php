<?php

namespace App\Exceptions\Auth;

use Exception;

class EmailAlreadyUsedException extends Exception
{
    public function __construct(int $code = 422)
    {
        parent::__construct(__('validation.email.used'), $code);
    }
}
