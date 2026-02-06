<?php

namespace Database\Seeders\Translation;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuColdDrinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            [
                "created_by" => 1,
                "sub_category_id" => 2,
                "is_active" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'آيس كوفي'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Ice Coffee'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'قهوة باردة مخفوقة مع ثلج وحليب حسب الرغبة'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Cold coffee blended with ice and milk to taste']

                ]
            ],

            [
                "created_by" => 1,
                "sub_category_id" => 2,
                "is_active" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'آيس لاتيه'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Iced Latte'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'إسبريسو مع حليب بارد وثلج'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Espresso with cold milk and ice']
                ]
            ],
            [
                "created_by" => 1,
                "sub_category_id" => 2,
                "is_active" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'آيس موكا'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Iced Mocha'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'إسبريسو مع شوكولاتة وحليب بارد وثلج'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Espresso with chocolate, cold milk, and ice']
                ]
            ],
            [
                "created_by" => 1,
                "sub_category_id" => 2,
                "is_active" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'آيس كابتشينو'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Iced Cappuccino'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'إسبريسو مع حليب بارد ورغوة خفيفة وثلج'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Espresso with cold milk, light foam, and ice']
                ]
            ],
            [
                "created_by" => 1,
                "sub_category_id" => 2,
                "is_active" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'كولد برو'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Cold Brew'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'قهوة منقوعة على البارد وتقدم مع ثلج'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Coffee brewed cold and served with ice']
                ]
            ],
            [
                "created_by" => 1,
                "sub_category_id" => 2,
                "is_active" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'آيس أمريكانو'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Iced Americano'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'إسبريسو مع ماء بارد وثلج'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Espresso with cold water and ice']
                ]
            ],
            [
                "created_by" => 1,
                "sub_category_id" => 2,
                "is_active" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'فرابيه قهوة'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Coffee Frappe'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'قهوة مخفوقة مع حليب وثلج وسكر'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Blended coffee with milk, ice, and sugar']
                ]
            ],
            [
                "created_by" => 1,
                "sub_category_id" => 2,
                "is_active" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'ميلك شيك فانيليا'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Vanilla Milkshake'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'حليب مخفوق مع آيس كريم الفانيليا وثلج'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Milk blended with vanilla ice cream and ice']
                ]
            ],
            [
                "created_by" => 1,
                "sub_category_id" => 2,
                "is_active" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'ميلك شيك شوكولاتة'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Chocolate Milkshake'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'حليب مخفوق مع آيس كريم الشوكولاتة وثلج'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Milk blended with chocolate ice cream and ice']
                ]
            ],
            [
                "created_by" => 1,
                "sub_category_id" => 2,
                "is_active" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'ميلك شيك فراولة'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Strawberry Milkshake'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'حليب مخفوق مع آيس كريم الفراولة وثلج'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Milk blended with strawberry ice cream and ice']
                ]
            ],
            [
                "created_by" => 1,
                "sub_category_id" => 2,
                "is_active" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'ميلك شيك أوريو'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Oreo Milkshake'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'حليب مخفوق مع بسكويت أوريو وثلج'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Milk blended with Oreo cookies and ice']
                ]
            ],
            [
                "created_by" => 1,
                "sub_category_id" => 2,
                "is_active" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'ميلك شيك لوتس'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Lotus Milkshake'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'حليب مخفوق مع بسكويت اللوتس وثلج'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Milk blended with Lotus biscuits and ice']
                ]
            ],
            [
                "created_by" => 1,
                "sub_category_id" => 2,
                "is_active" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'ميلك شيك مانجو'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Mango Milkshake'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'حليب مخفوق مع مانجو طازجة وثلج'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Milk blended with fresh mango and ice']
                ]
            ],
            [
                [
                    "created_by" => 1,
                    "sub_category_id" => 2,
                    "is_active" => 1,
                    "translations" => [
                        ['local' => 'ar', 'key' => 'title', 'value' => 'عصير برتقال'],
                        ['local' => 'en', 'key' => 'title', 'value' => 'Orange Juice'],
                        ['local' => 'ar', 'key' => 'body', 'value' => 'عصير برتقال طبيعي طازج يقدم بارد'],
                        ['local' => 'en', 'key' => 'body', 'value' => 'Freshly squeezed orange juice served cold']
                    ]
                ],
                [
                    "created_by" => 1,
                    "sub_category_id" => 2,
                    "is_active" => 1,
                    "translations" => [
                        ['local' => 'ar', 'key' => 'title', 'value' => 'عصير مانجو'],
                        ['local' => 'en', 'key' => 'title', 'value' => 'Mango Juice'],
                        ['local' => 'ar', 'key' => 'body', 'value' => 'عصير مانجو طبيعي طازج يقدم بارد'],
                        ['local' => 'en', 'key' => 'body', 'value' => 'Fresh mango juice served cold']
                    ]
                ],
                [
                    "created_by" => 1,
                    "sub_category_id" => 2,
                    "is_active" => 1,
                    "translations" => [
                        ['local' => 'ar', 'key' => 'title', 'value' => 'عصير فراولة'],
                        ['local' => 'en', 'key' => 'title', 'value' => 'Strawberry Juice'],
                        ['local' => 'ar', 'key' => 'body', 'value' => 'عصير فراولة طبيعي طازج يقدم بارد'],
                        ['local' => 'en', 'key' => 'body', 'value' => 'Fresh strawberry juice served cold']
                    ]
                ],
                "created_by" => 1,
                "sub_category_id" => 2,
                "is_active" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'عصير جوافة'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Guava Juice'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'عصير جوافة طبيعي طازج يقدم بارد'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Fresh guava juice served cold']
                ]
            ],
            [
                "created_by" => 1,
                "sub_category_id" => 2,
                "is_active" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'عصير أناناس'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Pineapple Juice'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'عصير أناناس طبيعي طازج يقدم بارد'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Fresh pineapple juice served cold']
                ]
            ],
            [
                "created_by" => 1,
                "sub_category_id" => 2,
                "is_active" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'عصير ليمون'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Lemon Juice'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'عصير ليمون طبيعي طازج يقدم بارد'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Fresh lemon juice served cold']
                ]
            ],
            [
                "created_by" => 1,
                "sub_category_id" => 2,
                "is_active" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'ليمون بالنعناع'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Lemon with Mint'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'عصير ليمون طبيعي ممزوج بأوراق النعناع يقدم بارد'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Fresh lemon juice mixed with mint leaves, served cold']
                ]
            ],
            [
                "created_by" => 1,
                "sub_category_id" => 2,
                "is_active" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'كوكتيل فواكه'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Fruit Cocktail'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'مزيج عصائر فواكه طازجة يقدم بارد'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Blend of fresh fruit juices served cold']
                ]
            ],
            [
                "created_by" => 1,
                "sub_category_id" => 2, // افترضنا أن sub_category_id = 4 للمشروبات الغازية
                "is_active" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'بيبسي / كولا'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Pepsi / Cola'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'مشروب غازي مثل البيبسي أو الكولا يقدم بارداً'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Carbonated drink like Pepsi or Cola served cold']
                ]
            ],
            [
                "created_by" => 1,
                "sub_category_id" => 2,
                "is_active" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'سبرايت'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Sprite'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'مشروب غازي بنكهة الليمون يقدم بارداً'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Lemon-flavored carbonated drink served cold']
                ]
            ],
            [
                "created_by" => 1,
                "sub_category_id" => 2,
                "is_active" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'فيروز'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Fayrouz'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'مشروب غازي بنكهة الفواكه يقدم بارداً'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Fruit-flavored carbonated drink served cold']
                ]
            ],
            [
                "created_by" => 1,
                "sub_category_id" => 2,
                "is_active" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'مياه معدنية'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Mineral Water'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'مياه معدنية طبيعية تقدم بارداً'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Natural mineral water served cold']
                ]
            ],
            [
                "created_by" => 1,
                "sub_category_id" => 2,
                "is_active" => 1,
                "translations" => [
                    ['local' => 'ar', 'key' => 'title', 'value' => 'مياه غازية'],
                    ['local' => 'en', 'key' => 'title', 'value' => 'Sparkling Water'],
                    ['local' => 'ar', 'key' => 'body', 'value' => 'مياه غازية طبيعية تقدم بارداً'],
                    ['local' => 'en', 'key' => 'body', 'value' => 'Natural sparkling water served cold']
                ]
            ],
        ];
        foreach($menus as $menuData){
            $menu = Menu::create([
                "created_by" => $menuData['created_by'],
                "sub_category_id" => $menuData['sub_category_id'],
                "is_active"=> $menuData['is_active'],
            ]);
            $menu->translations()->createMany($menuData['translations']);
        }
    }
}
