<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // User::create([
            // 'name' => 'Admin',
            // 'email' => 'admin@example.com',
            // 'password' => Hash::make('123456789'),
        // ]);
        User::firstOrCreate(
            ['email' => 'admin@example.com'], // เงื่อนไขตรวจสอบ
            [
                'name' => 'Admin',
                'password' => Hash::make('123456789'),
            ]
        );

        // ตรวจสอบและสร้างบัญชีแอดมินที่สอง
        User::firstOrCreate(
            ['email' => 'admin@plaengyao.go.th'], // เงื่อนไขตรวจสอบ
            [
                'name' => 'Admin2',
                'password' => Hash::make('987654321'),
            ]
        );
    }
}
