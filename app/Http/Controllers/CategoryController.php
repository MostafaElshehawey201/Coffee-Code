<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\category;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\DTO\UpdateCategoryDataTransferObject;
use App\Services\Categories\CategoriesService;
use App\Http\Requests\Category\updateCategoryRequest;
use App\Http\Resources\Categories\CategoriesResources;
use App\Exceptions\Categories\CategoriesNotFoundException;
use App\Http\Resources\Categories\AdminPanel\editCategoryResource;
use App\Exceptions\Categories\AdminPanel\CategoryNotFoundException;
use App\Http\Resources\Categories\AdminPanel\UpdateCategoryResource;

class CategoryController extends Controller
{
    use ApiResponse;
    public function __construct(protected CategoriesService $categories_service) {}
    public function allCategories()
    {
        try {
            $categories = $this->categories_service->allCategories();
            $apiCategories = CategoriesResources::collection($categories);
            return $this->success($apiCategories, 200);
        } catch (Exception $e) {
            return $this->error($e->getMessage(), 500);
        }
    }
    public function editCategory($category_id)
    {
        try {
            $category = $this->categories_service->editCategory($category_id);
            $ApiCategoryResource = new editCategoryResource($category);
            return $this->success($ApiCategoryResource, 200);
        } catch (CategoryNotFoundException $e) {
            return $this->error($e->getMessage(), 404);
        } catch (Exception $e) {
            return $this->error($e->getMessage(), 500);
        }
    }

    public function createCategory(updateCategoryRequest $updateCategoryRequest)
    {
        try {
            $validation = $updateCategoryRequest->validated();
            $DTO = new UpdateCategoryDataTransferObject($validation);
            $category = $this->categories_service->createCategory($updateCategoryRequest, $DTO);
            $apiCategoryResource = new UpdateCategoryResource($category);
            return $this->success($apiCategoryResource, 200);
        } catch (CategoriesNotFoundException $e) {
            return $this->error($e->getMessage(), 404);
        } catch (Exception $e) {
            return $this->error($e->getMessage(), 500);
        }
    }
}
