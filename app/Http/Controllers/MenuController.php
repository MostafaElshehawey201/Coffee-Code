<?php

namespace App\Http\Controllers;

use App\DTO\CreateMenuDataTransferObject;
use App\Exceptions\Menu\MenuNotFoundException;
use App\Http\Requests\Menu\AdminPanel\CreateMenuRequest;
use App\Http\Resources\Menu\AdminPanel\CreateMenuResource;
use App\Http\Resources\Menu\MenuResource;
use App\Services\Menus\MenuService;
use App\Traits\ApiResponse;
use Exception;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    use ApiResponse;

public function __construct(protected MenuService $menu_service )
{

}
    public function menu($category_id , $subCategory_id){
        try{
            $menu = $this->menu_service->menu($category_id , $subCategory_id);
            $mnuApiResource = MenuResource::collection($menu);
            return $this->success($mnuApiResource , 200);
        }catch(MenuNotFoundException $e){
            return $this->error($e->getMessage() , 404);
        }catch(Exception $e){
            return $this->error($e->getMessage() , 500);
        }
    }

    public function createMenu(CreateMenuRequest $createMenuRequest ,$sub_category_id){
        $validation = $createMenuRequest->validated();
        $DTO = new CreateMenuDataTransferObject($validation);
        $menu = $this->menu_service->createMenu($DTO , $createMenuRequest , $sub_category_id);
        $apiResourceMenu = new CreateMenuResource($menu);        
        return $this->success($apiResourceMenu , 200); 
    }
}
