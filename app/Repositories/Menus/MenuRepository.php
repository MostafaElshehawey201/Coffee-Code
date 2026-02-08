<?php

namespace App\Repositories\Menus;

use App\Models\Menu;
use App\Models\translation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MenuRepository
{
    /**
     * Create a new class instance.
     */
    public function __construct() {}

    public function getMenu($subCategory_id)
    {
        return Menu::with('translations')->where('sub_category_id', $subCategory_id)->get();
    }

    public function createMenu($DTO, $createMenuRequest, $sub_category_id)
    {
        return DB::transaction(function () use ($DTO, $createMenuRequest, $sub_category_id) {
            $menu = Menu::create([
                "sub_category_id" => $sub_category_id,
                "created_by" => Auth::guard('sanctum')->id(),
                "is_active" => 1,
            ]);
            foreach (['ar', 'en'] as $localeLang) {
                $titleLang = "title_$localeLang";
                $bodyLang = "body_$localeLang";
                translation::create([
                    "translatable_type" => Menu::class,
                    "local" => $localeLang,
                    "key" => "title",
                    "value" => $DTO->$titleLang,
                    "translatable_id" => $menu->id
                ]);
                translation::create([
                    "translatable_type" => Menu::class,
                    "local" => $localeLang,
                    "key" => "body",
                    "value" => $DTO->$bodyLang,
                    "translatable_id" => $menu->id
                ]); 
            }
            return $menu;
        });
    }
}
