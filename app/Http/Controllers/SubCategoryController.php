<?php

namespace App\Http\Controllers;

use App\Exceptions\SubCategories\NotFoundSubCategoriesException;
use App\Http\Resources\SubCategories\SubCategoriesResource;
use App\Services\SubCategories\SubCategoriesService;
use App\Traits\ApiResponse;
use Exception;
use Illuminate\Http\Request;
use Throwable;

class SubCategoryController extends Controller
{
    use ApiResponse;
    public function __construct(protected SubCategoriesService $sub_categories_service) {}
    public function allSubCategories()
    {
        try {
            $allSubCategories = $this->sub_categories_service->allSubCategories();
            $subCategoriesResource = SubCategoriesResource::collection($allSubCategories);
            return $this->success($subCategoriesResource, 200);
        } catch (Throwable $e) {
            return $this->error($e, 500);
        }
    }

    public function subCategory($category_id){
        try{
            $subCategories = $this->sub_categories_service->subCategory($category_id);
            $apiResourceSubCategories = SubCategoriesResource::collection($subCategories);
            return $this->success($apiResourceSubCategories , 200);
        }catch(NotFoundSubCategoriesException $e){
            return $this->error($e->getMessage() , 404);
        }catch(Exception $e){
            return $this->error($e->getMessage() , 500);
        }
    }
}
