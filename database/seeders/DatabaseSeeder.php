<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Hotel;
use App\Models\Room;
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
        User::insert([
            "name"=>"test",
            "email"=>"test@test.test",
            "password"=>bcrypt("test"),
            "role"=>"admin",
            "created_at"=>now(),
        ]);
        Category::Insert([
            ["name" => "Phòng view đẹp","created_at"=>now()],
            ["name" => "Phòng gia đình","created_at"=>now()],
            ["name" => "Phòng Tổng Thống","created_at"=>now()],
            ["name" => "Phòng bình dân","created_at"=>now()],
            ["name" => "Phòng Vip","created_at"=>now()],
        ]);
        Hotel::Insert([[
            "name" => "Khách sạn 5 sao",
            "address" => "123 Đường ABC, Quận 1, TP.HCM",
            "rooms"=>23,
            "description" => "Khách sạn sang trọng với đầy đủ tiện nghi hiện đại, phục vụ khách hàng tận tình và chuyên nghiệp.",
            "created_at" => now(),
        ],
    [
            "name" => "Khách sạn bãi biển",
            "address" => "456 Đường Biển, Quận 2, TP.HCM",
            "rooms"=>6,
            "description" => "Khách sạn gần bãi biển, view đẹp, phục vụ ăn sáng miễn phí.",
            "created_at" => now(),
        ]
    ]);
        Room::Insert([[
            "name"=> "Phòng Deluxe",
            "category_id" => 1,
            "pimage" => "deluxe.jpg",
            "base_price" => 2000000, // giá phòng
            "description" => "Phòng Deluxe với view đẹp, đầy đủ tiện nghi.",
            "hotel_id" => 1, // liên kết với khách sạn
            "amenities" => "Wi-Fi, TV, Điều hòa, Tủ lạnh",
            "isInUse" => 0,
            "created_at" => now(),
        ],[
            "name"=> "Phòng Gia Đình",
            "category_id" => 2,
            "pimage" => "family.jpg",
            "base_price" => 3000000, // giá phòng
            "description" => "Phòng rộng rãi cho gia đình, có 2 giường đôi.",
            "hotel_id" => 1, // liên kết với khách sạn
            "amenities" => "Wi-Fi, TV, Điều hòa, Bếp nhỏ",
            "isInUse" => 0,
            "created_at" => now(),
        ]]);
    }
}
