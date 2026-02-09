<?php

namespace App\Http\Controllers;

use Exception;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Services\Menus\MenuService;
use App\DTO\CreateMenuDataTransferObject;
use App\Http\Resources\Menu\MenuResource;
use App\Exceptions\Menu\MenuNotFoundException;
use Brick\Math\Exception\NegativeNumberException;
use App\Exceptions\Menu\CantAddMenuToFavoriteException;
use App\Http\Requests\Menu\AdminPanel\CreateMenuRequest;
use App\Http\Resources\Menu\AdminPanel\CreateMenuResource;
use App\Exceptions\Menu\AdminPanel\notCreatedMenuException;
use App\Http\Resources\Menu\addMenuToFavoriteResource;
use App\Http\Resources\Menu\ShowFavoriteMenuResource;

class MenuController extends Controller
{
    use ApiResponse;

    public function __construct(protected MenuService $menu_service) {}
    public function menu($category_id, $subCategory_id)
    {
        try {
            $menu = $this->menu_service->menu($subCategory_id);
            $mnuApiResource = MenuResource::collection($menu);
            return $this->success($mnuApiResource, 200);
        } catch (MenuNotFoundException $e) {
            return $this->error($e->getMessage(), 404);
        } catch (Exception $e) {
            return $this->error($e->getMessage(), 500);
        }
    }

    public function createMenu(CreateMenuRequest $createMenuRequest, $sub_category_id)
    {
        try {
            $validation = $createMenuRequest->validated();
            $DTO = new CreateMenuDataTransferObject($validation);
            $menu = $this->menu_service->createMenu($DTO, $createMenuRequest, $sub_category_id);
            $apiResourceMenu = new CreateMenuResource($menu);
            return $this->success($apiResourceMenu, 200);
        } catch (notCreatedMenuException $e) {
            return $this->error($e->getMessage(), 422);
        } catch (Exception $e) {
            return $this->error($e->getMessage(), 500);
        }
    }

    public function addMenuFavorite($category_id, $subCategory_id, $menu_id)
    {
        try {
            $menu = $this->menu_service->addMenuFavorite($menu_id);
            $apiResourceMenu = new addMenuToFavoriteResource($menu);
            return $this->success($apiResourceMenu, 200);
        } catch (NegativeNumberException $e) {
            return $this->error($e->getMessage(), 422);
        } catch (CantAddMenuToFavoriteException $e) {
            return $this->error($e->getMessage(), 422);
        } catch (Exception $e) {
            return $this->error($e->getMessage(), 500);
        }
    }

    public function showMenuFavorite($subCategory_id, $menu_id)
    {
        try {
            $menus = $this->menu_service->showMenuFavorite($menu_id);
            $apiResourceMenus = ShowFavoriteMenuResource::collection($menus);
            return $this->success($apiResourceMenus, 200);
        } catch (MenuNotFoundException $e) {
            return $this->error($e->getMessage(), 404);
        } catch (Exception $e) {
            return $this->error($e->getMessage(), 500);
        }
    }
}
