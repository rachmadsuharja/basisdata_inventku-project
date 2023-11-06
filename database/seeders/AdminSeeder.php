<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "name"=> "Rachmad Suharja",
                "role" => "admin",
                "email"=> "corvusscarlet@gmail.com",
                "password"=> Hash::make("inventku123"),
            ], [
                "name"=> "Jo Ryuushi",
                "role"=> "admin",
                "email"=> "jcryuushi@gmail.com",
                "password"=> Hash::make("inventku123"),
            ], [
                "name" => "Harjakrepp",
                "role"=> "admin",
                "email" => "harjacraft@gmail.com",
                "password" => Hash::make("inventku123")
            ]
        ];
        foreach ($data as $userData) {
            User::create($userData);
        }
    }
}
