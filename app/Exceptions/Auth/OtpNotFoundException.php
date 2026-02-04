<?php

namespace App\Exceptions\Auth;

use Exception;
use Throwable;

class OtpNotFoundException extends Exception
{
    public function __construct( int $code = 0)
    {
        return parent::__construct(__('validation.otp.notFound'), $code);
    }
}
