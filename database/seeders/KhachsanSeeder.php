<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhachsanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rooms')->insert([
            [
                'name' => 'Phòng Deluxe',
                'category_id' => 1,
                'pimage' => 'deluxe.jpg',
                'description' => 'Phòng rộng rãi, view thành phố, đầy đủ tiện nghi.',
                'review' => 'Rất sạch sẽ và thoải mái.',
                'rating' => 5,
                'amenities' => 'Wifi, TV, Điều hòa, Mini Bar',
                'position' => 'Tầng 3',
                'isInUse' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Phòng Suite',
                'category_id' => 2,
                'pimage' => 'suite.jpg',
                'description' => 'Phòng cao cấp với phòng khách riêng biệt.',
                'review' => 'Dịch vụ tuyệt vời.',
                'rating' => 5,
                'amenities' => 'Wifi, TV, Điều hòa, Mini Bar, Bồn tắm',
                'position' => 'Tầng 5',
                'isInUse' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Phòng Standard',
                'category_id' => 1,
                'pimage' => 'standard.jpg',
                'description' => 'Phòng tiêu chuẩn, phù hợp cho 2 người.',
                'review' => 'Giá hợp lý, tiện nghi đầy đủ.',
                'rating' => 4,
                'amenities' => 'Wifi, TV, Điều hòa',
                'position' => 'Tầng 2',
                'isInUse' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Phòng nhucut',
                'category_id' => 1,
                'pimage' => 'standard.jpg',
                'description' => 'Phòng tiêu chuẩn, phù hợp cho 2 người.',
                'review' => 'Giá hợp lý, tiện nghi đầy đủ.',
                'rating' => 4,
                'amenities' => 'Wifi, TV, Điều hòa',
                'position' => 'Tầng 3',
                'isInUse' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
