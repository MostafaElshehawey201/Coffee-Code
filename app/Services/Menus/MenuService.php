<?php

namespace App\Services\Menus;

use App\Exceptions\Menu\AdminPanel\notCreatedMenuException;
use App\Repositories\Menus\MenuRepository;
use App\Exceptions\Menu\MenuNotFoundException;

class MenuService
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected MenuRepository $menu_repository)
    {
        //
    }

    public function menu($category_id, $subCategory_id)
    {
        $menu = $this->menu_repository->getMenu($subCategory_id);
        if (!$menu) {
            throw new MenuNotFoundException(404);
        }
        return $menu;
    }

    public function createMenu($DTO , $createMenuRequest ,$sub_category_id){
        $menu = $this->menu_repository->createMenu($DTO , $createMenuRequest , $sub_category_id);
        if(!$menu){
            throw new notCreatedMenuException(422);
        }
        return $menu;
    }
}
