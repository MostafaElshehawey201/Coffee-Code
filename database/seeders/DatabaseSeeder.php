<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\Translation\CategorySeeder;
use Database\Seeders\Translation\SubCategorySeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            CategorySeeder::class,
            SubCategorySeeder::class,
            ]
        );
    }
}
