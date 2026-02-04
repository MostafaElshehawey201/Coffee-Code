<?php

namespace App\Repositories\Categories;

use App\Models\category;

class CategoriesRepository
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function getCategories(){
        return category::with('translations')->get();
    }
}
