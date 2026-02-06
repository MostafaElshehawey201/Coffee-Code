<?php

namespace App\Exceptions\Menu;

use Exception;
use Throwable;

class MenuNotFoundException extends Exception
{
    public function __construct($code = 0)
    {
    return parent::__construct(__('validation.menu.notFound') , $code);   
    }
}
