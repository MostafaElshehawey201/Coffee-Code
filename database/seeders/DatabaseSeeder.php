<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Translation\CategorySeeder;
use Database\Seeders\Translation\MenuColdDrinksSeeder;
use Database\Seeders\Translation\SubCategorySeeder;
use Database\Seeders\Translation\MenuHotDrinksSeeder;
use Database\Seeders\User\CreateUserSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(
            [
            CreateUserSeeder::class,
            CategorySeeder::class,
            SubCategorySeeder::class,
            MenuHotDrinksSeeder::class,
            MenuColdDrinksSeeder::class,
            ]
        );
    }
}
