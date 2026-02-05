<?php

namespace App\Services\SubCategories;

use App\Repositories\SubCategories\SubCategoriesRepository;

class SubCategoriesService
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected SubCategoriesRepository $sub_categories_repository)
    {
        //
    }

    public function allSubCategories(){
        return $this->sub_categories_repository->getSubCategories();
    }
}
