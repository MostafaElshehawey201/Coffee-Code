<?php

namespace App\Services\Categories;

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

    public function allCategories(){
        $categories = $this->categories_repository->getCategories();
        if(!$categories){
            throw new CategoriesNotFoundException();
        }
        return $categories;
    }
}
