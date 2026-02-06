<?php

namespace Database\Seeders\Translation;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuHotDrinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            [
                "created_by" => 1,
                "is_active" => 1,
                "sub_category_id" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'شاي'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'tea'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'ماء مغلي مضاف الية حبات الشاي الطبيعية القابلة للذوبان في الماء'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Boiling water with added natural water-soluble tea leaves'],
                ]
            ],
            [
                'created_by' => 1,
                "is_active" => 1,
                "sub_category_id" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'ينسون'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'anise'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'ماء مغلي مضاف الية حبات اليانسون الطبيعية القابلة للذوبان في الماء'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Boiling water with added natural water-soluble anise seeds'],
                ]
            ],
            [
                "created_by" => 1,
                "is_active" => 1,
                "sub_category_id" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'نعناع'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'mint'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'ماء مغلي مضاف الية وريقات النعناع الطبيعية'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Boiling water with added fresh mint leaves'],
                ]
            ],

            [
                "created_by" => 1,
                "is_active" => 1,
                "sub_category_id" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'كركديه ساخن'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Hot Hibiscus'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'ماء مغلي مضاف إليه أزهار الكركديه المجففة ويقدم ساخن'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Boiling water infused with dried hibiscus flowers, served hot'],
                ]
            ],
            [
                "created_by" => 1,
                "is_active" => 1,
                "sub_category_id" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'حلبة'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Fenugreek Drink'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'ماء مغلي مضاف إليه حبوب الحلبة ويترك حتى يتخمر الطعم'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Boiling water infused with fenugreek seeds'],
                ]
            ],
            [
                "created_by" => 1,
                "is_active" => 1,
                "sub_category_id" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'قرفة'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Cinnamon Drink'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'ماء مغلي مضاف إليه أعواد القرفة الطبيعية'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Boiling water infused with natural cinnamon sticks'],
                ]
            ],
            [
                "created_by" => 1,
                "is_active" => 1,
                "sub_category_id" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'زنجبيل'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Ginger Drink'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'ماء مغلي مضاف إليه شرائح الزنجبيل الطازج'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Boiling water infused with fresh ginger slices'],
                ]
            ],
            [
                "created_by" => 1,
                "is_active" => 1,
                "sub_category_id" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'ورق الجوافة'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Guava Leaves Drink'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'ماء مغلي مضاف إليه أوراق الجوافة الطبيعية'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Boiling water infused with natural guava leaves'],
                ]
            ],
            [
                "created_by" => 1,
                "is_active" => 1,
                "sub_category_id" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'لبن'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'milk'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'لبن طبيعي طازج'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Fresh natural milk'],
                ]
            ],
            [
                "created_by" => 1,
                "is_active" => 1,
                "sub_category_id" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'شاي بلبن'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Milk Tea'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'شاي أسود مع حليب ساخن وسكر حسب الرغبة'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Black tea served with hot milk and sugar to taste'],
                ]
            ],
            [
                "created_by" => 1,
                "is_active" => 1,
                "sub_category_id" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'قهوة'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Coffee'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'ماء ساخن مضاف إليه بن مطحون طازج ويقدم ساخن'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Hot water brewed with freshly ground coffee'],
                ]
            ],
            [
                "created_by" => 1,
                "is_active" => 1,
                "sub_category_id" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'نسكافيه'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Nescafe'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'قهوة سريعة التحضير مع ماء ساخن وسكر حسب الرغبة'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Instant coffee served with hot water and sugar to taste'],
                ]
            ],
            [
                "created_by" => 1,
                "is_active" => 1,
                "sub_category_id" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'كابتشينو'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Cappuccino'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'إسبريسو مع حليب مبخر ورغوة كريمية'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Espresso with steamed milk and creamy foam'],
                ]
            ],
            [
                "created_by" => 1,
                "is_active" => 1,
                "sub_category_id" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'موكا'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Mocha'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'إسبريسو مع شوكولاتة وحليب ساخن'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Espresso with chocolate and hot milk'],
                ]
            ],
            [
                "created_by" => 1,
                "is_active" => 1,
                "sub_category_id" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'لاتيه'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Latte'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'إسبريسو مع حليب ساخن وقليل من الرغوة'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Espresso with hot milk and light foam'],
                ]
            ],
            [
                "created_by" => 1,
                "is_active" => 1,
                "sub_category_id" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'أوريو'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Oreo Drink'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'حليب بارد مع بسكويت أوريو مطحون وكريمة'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Cold milk blended with crushed Oreo cookies and cream'],
                ]
            ],
        ];
        foreach($menus as $menuData){
            $menu = Menu::create([
                "created_by" => $menuData['created_by'],
                "sub_category_id" => $menuData['sub_category_id'],
                "is_active" => $menuData['is_active'],
            ]);
            $menu->translations()->createMany($menuData['translations']);
        }
    }

}
