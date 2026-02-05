<?php

namespace App\Repositories\SubCategories;

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
}
