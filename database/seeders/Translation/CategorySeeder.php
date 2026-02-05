<?php

namespace Database\Seeders\Translation;

use App\Models\User;
use App\Models\category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

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
            [
                'user_id' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'مقبلات'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Appetizers'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'كل أنواع المقبلات'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'All kinds of appetizers'],
                ]
            ],
            [
                'user_id' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'وجبات رئيسية'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Main Courses'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'كل أنواع الوجبات الرئيسية'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'All types of main courses'],
                ]
            ],
            [
                'user_id' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'مشروبات غازية'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Soft Drinks'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'كل أنواع المشروبات الغازية'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'All types of soft drinks'],
                ]
            ],
            [
                'user_id' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'مشروبات ساخنة'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Hot Drinks'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'كل أنواع المشروبات الساخنة'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'All types of hot drinks'],
                ]
            ],
        ];
        foreach ($categories as $singleCategory) {
            $category = Category::create([
                'user_id' => $singleCategory['user_id'],
                'is_active' => $singleCategory['is_active'],
            ]);

            $category->translations()->createMany($singleCategory['translations']);
        }
    }
}
