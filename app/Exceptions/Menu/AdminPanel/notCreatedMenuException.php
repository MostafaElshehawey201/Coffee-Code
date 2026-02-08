<?php

namespace App\Exceptions\Menu\AdminPanel;

use Exception;
use Throwable;

class notCreatedMenuException extends Exception
{
    public function __construct($code)
    {
        return parent::__construct(__('validation.menu.notCreatedMenu'),$code);
    }
}
