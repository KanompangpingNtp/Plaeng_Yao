<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BasicInfoType ;

class BasicInfoTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['type_name' => 'อำนาจหน้าที่'],
        ];

        foreach ($data as $item) {
            BasicInfoType::firstOrCreate(
                ['type_name' => $item['type_name']],
                ['type_name' => $item['type_name']]
            );
        }
    }
}
