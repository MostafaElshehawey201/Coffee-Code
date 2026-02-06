<?php

namespace App\Exceptions\Categories\AdminPanel;

use Exception;
use Throwable;

class CategoryNotFoundException extends Exception
{
    public function __construct($code)
    {
        return parent::__construct(__('validation.category.notFound') , $code);
    }
}
