<?php

namespace Database\Seeders\Translation;

use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subCategories = [
            // للمشروبات (Drinks)
            [
                'category_id' => 1, // Drinks
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'مشروبات ساخنة'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Hot Drinks'],
                ]
            ],
            [
                'category_id' => 1,
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'مشروبات باردة'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Cold Drinks'],
                ]
            ],

            // للأطعمة (Food)
            [
                'category_id' => 2, // Food
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'أطباق رئيسية'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Main Dishes'],
                ]
            ],
            [
                'category_id' => 2,
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'مقبلات'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Appetizers'],
                ]
            ],

            // للحلويات (Desserts)
            [
                'category_id' => 3,
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'كيك'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Cakes'],
                ]
            ],
            [
                'category_id' => 3,
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'حلويات شرقية'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Eastern Sweets'],
                ]
            ],

            // للمقبلات (Appetizers)
            [
                'category_id' => 4,
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'سلطات'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Salads'],
                ]
            ],
            [
                'category_id' => 4,
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'سندوتشات'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Sandwiches'],
                ]
            ],

            // للوجبات الرئيسية (Main Courses)
            [
                'category_id' => 5,
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'بيتزا'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Pizza'],
                ]
            ],
            [
                'category_id' => 5,
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'باستا'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Pasta'],
                ]
            ],

            // للمشروبات الغازية (Soft Drinks)
            [
                'category_id' => 6,
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'كولا'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Cola'],
                ]
            ],
            [
                'category_id' => 6,
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'عصائر'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Juices'],
                ]
            ],

            // للمشروبات الساخنة (Hot Drinks)
            [
                'category_id' => 7,
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'قهوة'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Coffee'],
                ]
            ],
            [
                'category_id' => 7,
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'شاي'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Tea'],
                ]
            ],
        ];

        foreach ($subCategories as $sub_cat) {
            $SubCategory = SubCategory::create([
                "created_by" => $sub_cat['created_by'],
                "is_active" => $sub_cat['is_active'],
                "category_id" => $sub_cat['category_id'],
            ]);
            $SubCategory->translations()->createMany($sub_cat['translations']);
        }
    }
}
