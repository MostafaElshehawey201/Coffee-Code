<?php

namespace App\Exceptions\Menu;

use Exception;
use Throwable;

class CantAddMenuToFavoriteException extends Exception
{
    public function __construct($code)
    {
        return parent::__construct(__('validation.menu.cantAddToMenu'),$code);
    }
}
