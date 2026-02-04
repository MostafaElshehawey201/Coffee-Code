<?php

namespace Database\Seeders\Translation;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'user_id' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'مشروبات'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Drinks'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'كل المشروبات الساخنة والباردة'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'All hot and cold drinks'],
                ]
            ],
            [
                'user_id' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'أطعمة'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Food'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'كل الأطعمة المتوفرة في المطعم'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'All available food in the restaurant'],
                ]
            ],
            [
                'user_id' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'حلويات'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Desserts'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'الحلويات المختلفة'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Various desserts'],
                ]
            ],
        ];

        foreach ($categories as $singleCategory) {
            $category = category::create([
                'user_id' => $singleCategory['user_id'],
                'is_active' => $singleCategory['is_active'],
            ]);
            $category->translations()->createMany($singleCategory['translations']);
        }
    }
}
