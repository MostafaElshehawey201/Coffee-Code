<?php

namespace App\Services\Menus;

use App\Exceptions\Menu\AdminPanel\notCreatedMenuException;
use App\Exceptions\Menu\CantAddMenuToFavoriteException;
use App\Repositories\Menus\MenuRepository;
use App\Exceptions\Menu\MenuNotFoundException;
use Brick\Math\Exception\NegativeNumberException;

class MenuService
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected MenuRepository $menu_repository)
    {
        //
    }

    public function menu($subCategory_id)
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

    public function addMenuFavorite($menu_id){
        if($menu_id <= 0){
            throw new NegativeNumberException(422);
        }
        $menu = $this->menu_repository->addMenuFavorite($menu_id);
        if(!$menu){
            throw new CantAddMenuToFavoriteException(422);
        }
        return $menu;
    }
}
