<?php

namespace App\Repositories\Menus;

use App\Models\Menu;

class MenuRepository
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        
    }

    public function getMenu($subCategory_id){
        return Menu::with('translations')->where('sub_category_id' ,$subCategory_id)->get();
    }
}
