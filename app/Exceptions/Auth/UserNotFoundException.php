<?php

namespace App\Exceptions\Auth;

use Exception;
use Throwable;

class UserNotFoundException extends Exception
{
    public function __construct(int $code = 404)
    {
        return parent::__construct(__('validation.user.notFound'),$code);
    }
}
