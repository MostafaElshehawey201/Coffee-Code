<?php

namespace App\Http\Controllers;

use App\Http\Resources\SubCategories\SubCategoriesResource;
use App\Services\SubCategories\SubCategoriesService;
use App\Traits\ApiResponse;
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
}
