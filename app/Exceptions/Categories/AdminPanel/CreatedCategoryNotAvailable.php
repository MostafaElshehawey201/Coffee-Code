<?php

namespace App\Exceptions\Categories\AdminPanel;

use Exception;
use Throwable;

class CreatedCategoryNotAvailable extends Exception
{
    public function __construct($code)
    {
        return parent::__construct(__('validation.category.createdNotAvailable') , 422);
    }
}
