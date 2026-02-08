<?php

namespace App\Services\SubCategories;

use App\Exceptions\SubCategories\NotFoundSubCategoriesException;
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

    public function allSubCategories()
    {
        return $this->sub_categories_repository->getSubCategories();
    }

    public function subCategory($category_id)
    {
        $subCategory = $this->sub_categories_repository->subCategoryWhere($category_id);
        if ($subCategory == null) {
            throw new NotFoundSubCategoriesException(404);
        }
        return $subCategory;
    }

    public function createSubCategory($DtoCreateSubCategory){
        $this->sub_categories_repository->createSubCategory($DtoCreateSubCategory);
    }
}
