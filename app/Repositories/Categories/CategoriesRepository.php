<?php

namespace App\Repositories\Categories;

use App\Models\category;
use App\Models\translation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CategoriesRepository
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function getCategories()
    {
        return category::with('translations')->get();
    }

    public function findOrFailCategory($category_id)
    {
        return category::with('translations')->findOrFail($category_id);
    }
    public function createCategory($updateCategoryRequest, $DTO)
    {
        return DB::transaction(function () use ($DTO) {
            // dd($DTO);
            $category = category::create([
                "user_id" => Auth::guard('sanctum')->id(),
                "is_active" => 1,
            ]);
            // دا loop  علي اللغة هينفذ الكود دا مره عربي و مره انجليزي 
            foreach (['ar', 'en'] as $locale) {
                $titleProp = "title_$locale";
                $bodyProp  = "body_$locale";

                Translation::create([
                    "translatable_type" => Category::class,
                    "local"            => $locale,
                    "key"               => 'title',
                    "value"             => $DTO->$titleProp,
                    "translatable_id"   => $category->id,
                ]);

                Translation::create([
                    "translatable_type" => Category::class,
                    "local"            => $locale,
                    "key"               => 'body',
                    "value"             => $DTO->$bodyProp,
                    "translatable_id"   => $category->id,
                ]);
            }
            return $category;
        });
    }
}
