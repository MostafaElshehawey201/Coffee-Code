<?php

namespace App\Services\Categories;

use App\Exceptions\Categories\AdminPanel\CategoryNotFoundException;
use App\Exceptions\Categories\AdminPanel\CreatedCategoryNotAvailable;
use App\Exceptions\Categories\CategoriesNotFoundException;
use App\Models\category;
use App\Repositories\Categories\CategoriesRepository;

class CategoriesService
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected CategoriesRepository $categories_repository)
    {
        //
    }

    public function allCategories()
    {
        $categories = $this->categories_repository->getCategories();
        if (!$categories) {
            throw new CategoriesNotFoundException();
        }
        return $categories;
    }

    public function editCategory($category_id)
    {
        $category = $this->categories_repository->findOrFailCategory($category_id);
        if (!$category) {
            throw new CategoryNotFoundException(404);
        }
        return $category;
    }

    public function createCategory($updateCategoryRequest, $DTO) {
        $category = $this->categories_repository->createCategory($updateCategoryRequest , $DTO);
        // if(!$category){
        //     throw new CreatedCategoryNotAvailable(422);
        // }
        return $category;
    }
}
