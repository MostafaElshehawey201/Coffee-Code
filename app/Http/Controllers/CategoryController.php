<?php

namespace App\Http\Controllers;

use App\Http\Resources\Categories\CategoriesResources;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Models\category;
use App\Services\Categories\CategoriesService;
use Exception;

class CategoryController extends Controller
{
    use ApiResponse;
    public function __construct(protected CategoriesService $categories_service) {}
    // public function index()
    // {
    //     $categories = category::with('translations')->get()->map(function($cat){
    //         return [
    //             'id' => $cat->id,
    //             'is_active' => $cat->is_active,
    //             'title' => $cat->translate('title'),
    //             'body' => $cat->translate('body'),
    //         ];
    //     });

    //     return response()->json($categories);
    // }

    public function allCategories()
    {
        try {
            $categories = $this->categories_service->allCategories();
            $apiCategories = CategoriesResources::collection($categories);
            return $this->success($apiCategories, 200);
        } catch (Exception $e) {
            return $this->error($e->getMessage(), 500);
        }

        // try{
        //     $this->categories_service->allCategories();
        // }catch(){

        // }
    }
}
