<?php

namespace App\Repositories\SubCategories;

use App\Models\category;
use App\Models\SubCategory;

class SubCategoriesRepository
{
    /**
     * Create a new class instance.
     */
    public function __construct() {

    }
    public function getSubCategories() {
        return SubCategory::with('translations')->get();
    }

    public function subCategoryWhere($category_id){
        return SubCategory::with('translations')->where('category_id' , $category_id)->get();
    }
}
