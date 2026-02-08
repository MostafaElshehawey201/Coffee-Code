<?php

namespace App\Repositories\SubCategories;

use App\Models\category;
use App\Models\SubCategory;
use App\Models\translation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SubCategoriesRepository
{
    /**
     * Create a new class instance.
     */
    public function __construct() {}
    public function getSubCategories()
    {
        return SubCategory::with('translations')->get();
    }

    public function subCategoryWhere($category_id)
    {
        return SubCategory::with('translations')->where('category_id', $category_id)->get();
    }

    public function createSubCategory($DtoCreateSubCategory)
    {
        return DB::transaction(function () use ($DtoCreateSubCategory) {
            
            $subCategory = SubCategory::create([
                "created_by" => Auth::guard('sanctum')->id(),
                "category_id" => $DtoCreateSubCategory->category_id,
                "is_active" => 1, 
            ]);
            foreach (['ar','en'] as $langLocal) {
                // ['ar' , 'en']  هنا حتطلو الشرط دا ان المفروض ان ينفذ ال foreach مره و هم ar  و مرة وهم  en 
                $titleLang = "title_$langLocal";
                $bodyLang = "body_$langLocal";
                translation::create([
                    "translatable_type" => SubCategory::class,
                    "local" => $langLocal,
                    "key" => 'title',
                    "value" => $DtoCreateSubCategory->$titleLang,
                    "translatable_id" => $subCategory->id,
                ]);

                translation::create([
                    "translatable_type" => SubCategory::class,
                    "local" => $langLocal,
                    "key" => 'body',
                    "value" => $DtoCreateSubCategory->$bodyLang,
                    "translatable_id" => $subCategory->id,
                ]);
            }
        });
    }
}
