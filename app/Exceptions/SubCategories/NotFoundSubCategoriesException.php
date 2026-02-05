<?php

namespace App\Exceptions\SubCategories;

use Exception;
use Throwable;

class NotFoundSubCategoriesException extends Exception
{
    public function __construct($code)
    { 
        return parent::__construct(__('validation.subCategories.notFound') , $code);    
    }
}
