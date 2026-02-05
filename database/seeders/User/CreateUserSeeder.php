<?php

namespace Database\Seeders\User;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Mostafa Mahmoud Elshehawey",
            "email" => "mostafa@gmail.com",
            "phone" => "01095766001",
            "password" => Hash::Make("123654789"),
            ]);
    }
}
