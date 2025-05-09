<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PostType;

class PostTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['type_name' => 'ข่าวประชาสัมพันธ์'],
            ['type_name' => 'กิจกรรม'],

            ['type_name' => 'ประกาศจัดซื้อจัดจ้าง'],
            ['type_name' => 'ผลประกาศจัดซื้อจัดจ้างประจำปี'],
            ['type_name' => 'สรุปผลการจัดซื้อจัดจ้าง'],
            ['type_name' => 'แผนการจัดซื้อจัดจ้าง'],
            ['type_name' => 'ประกาศผู้ชนะการเสนอราคา'],

            ['type_name' => 'รางวัลแห่งความภาคภูมิใจ'],
            ['type_name' => 'ป้ายประกาศ'],
            ['type_name' => 'แนะนำสถานที่'],
            ['type_name' => 'หนังสือราชการ'],
        ];

        foreach ($data as $item) {
            PostType::firstOrCreate(
                ['type_name' => $item['type_name']],
                ['type_name' => $item['type_name']]
            );
        }
    }
}
