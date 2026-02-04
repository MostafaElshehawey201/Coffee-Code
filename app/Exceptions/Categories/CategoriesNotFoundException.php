<?php

namespace App\Exceptions\Categories;

use Exception;
use Throwable;

class CategoriesNotFoundException extends Exception
{
    public function __construct($code = 404)
    {
        return parent::__construct(__('validation.categories.notFound') , $code);
    }
}
