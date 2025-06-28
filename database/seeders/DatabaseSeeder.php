<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Category::Insert([
            ["name" => "Phòng view đẹp","created_at"=>now()],
            ["name" => "Phòng gia đình","created_at"=>now()],
            ["name" => "Phòng Tổng Thống","created_at"=>now()],
            ["name" => "Phòng bình dân","created_at"=>now()],
            ["name" => "Phòng Vip","created_at"=>now()],
        ]);
    }
}
