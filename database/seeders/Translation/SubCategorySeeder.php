<?php

namespace Database\Seeders\Translation;

use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    public function run(): void
    {
        $subCategories = [
            // Drinks
            [
                'category_id' => 1,
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'مشروبات ساخنة'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Hot Drinks'],
                    ['local' => 'ar', 'key' => 'body',  'value' => 'مجموعة من المشروبات الساخنة مثل القهوة والشاي.'],
                    ['local' => 'en', 'key' => 'body',  'value' => 'A selection of hot drinks like coffee and tea.'],
                ]
            ],
            [
                'category_id' => 1,
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'مشروبات باردة'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Cold Drinks'],
                    ['local' => 'ar', 'key' => 'body',  'value' => 'مشروبات منعشة تقدم باردة.'],
                    ['local' => 'en', 'key' => 'body',  'value' => 'Refreshing beverages served cold.'],
                ]
            ],

            // Food
            [
                'category_id' => 2,
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'أطباق رئيسية'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Main Dishes'],
                    ['local' => 'ar', 'key' => 'body',  'value' => 'أطباق أساسية مشبعة ولذيذة.'],
                    ['local' => 'en', 'key' => 'body',  'value' => 'Hearty and delicious main courses.'],
                ]
            ],
            [
                'category_id' => 2,
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'مقبلات'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Appetizers'],
                    ['local' => 'ar', 'key' => 'body',  'value' => 'مقبلات خفيفة قبل الوجبة الرئيسية.'],
                    ['local' => 'en', 'key' => 'body',  'value' => 'Light starters before the main meal.'],
                ]
            ],

            // Desserts
            [
                'category_id' => 3,
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'كيك'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Cakes'],
                    ['local' => 'ar', 'key' => 'body',  'value' => 'تشكيلة من الكيك الطازج.'],
                    ['local' => 'en', 'key' => 'body',  'value' => 'A variety of fresh cakes.'],
                ]
            ],
            [
                'category_id' => 3,
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'حلويات شرقية'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Eastern Sweets'],
                    ['local' => 'ar', 'key' => 'body',  'value' => 'حلويات تقليدية بطعم مميز.'],
                    ['local' => 'en', 'key' => 'body',  'value' => 'Traditional sweets with rich flavors.'],
                ]
            ],

            // Appetizers
            [
                'category_id' => 4,
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'سلطات'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Salads'],
                    ['local' => 'ar', 'key' => 'body',  'value' => 'سلطات طازجة وصحية.'],
                    ['local' => 'en', 'key' => 'body',  'value' => 'Fresh and healthy salads.'],
                ]
            ],
            [
                'category_id' => 4,
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'سندوتشات'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Sandwiches'],
                    ['local' => 'ar', 'key' => 'body',  'value' => 'سندوتشات سريعة ولذيذة.'],
                    ['local' => 'en', 'key' => 'body',  'value' => 'Quick and tasty sandwiches.'],
                ]
            ],

            // Main Courses
            [
                'category_id' => 5,
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'بيتزا'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Pizza'],
                    ['local' => 'ar', 'key' => 'body',  'value' => 'بيتزا طازجة بمكونات متنوعة.'],
                    ['local' => 'en', 'key' => 'body',  'value' => 'Fresh pizza with various toppings.'],
                ]
            ],
            [
                'category_id' => 5,
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'باستا'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Pasta'],
                    ['local' => 'ar', 'key' => 'body',  'value' => 'أطباق باستا بصلصات مختلفة.'],
                    ['local' => 'en', 'key' => 'body',  'value' => 'Pasta dishes with various sauces.'],
                ]
            ],

            // Soft Drinks
            [
                'category_id' => 6,
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'كولا'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Cola'],
                    ['local' => 'ar', 'key' => 'body',  'value' => 'مشروب غازي منعش.'],
                    ['local' => 'en', 'key' => 'body',  'value' => 'Refreshing soft drink.'],
                ]
            ],
            [
                'category_id' => 6,
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'عصائر'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Juices'],
                    ['local' => 'ar', 'key' => 'body',  'value' => 'عصائر طبيعية طازجة.'],
                    ['local' => 'en', 'key' => 'body',  'value' => 'Fresh natural juices.'],
                ]
            ],

            // Hot Drinks
            [
                'category_id' => 7,
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'قهوة'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Coffee'],
                    ['local' => 'ar', 'key' => 'body',  'value' => 'أنواع مختلفة من القهوة.'],
                    ['local' => 'en', 'key' => 'body',  'value' => 'Different types of coffee.'],
                ]
            ],
            [
                'category_id' => 7,
                'created_by' => 1,
                'is_active' => true,
                'translations' => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'شاي'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Tea'],
                    ['local' => 'ar', 'key' => 'body',  'value' => 'شاي بأنواع ونكهات متعددة.'],
                    ['local' => 'en', 'key' => 'body',  'value' => 'Tea with various flavors.'],
                ]
            ],
        ];

        foreach ($subCategories as $sub_cat) {
            $subCategory = SubCategory::create([
                "created_by" => $sub_cat['created_by'],
                "is_active"  => $sub_cat['is_active'],
                "category_id" => $sub_cat['category_id'],
            ]);

            $subCategory->translations()->createMany($sub_cat['translations']);
        }
    }
}
