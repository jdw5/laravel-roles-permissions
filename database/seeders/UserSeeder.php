<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "id" => 1,
            "name" => "Test User",
            "email" => "test@example.com",
            "email_verified_at" => null,
            "password" => "$2y$10\$Md/yFaBhw8dfV8VWsAF/JeSl2dRF3t5KRioiGhs.0ALNYtEIHk7eu",
            "remember_token" => null,
            "created_at" => "2022-12-15 04:30:21",
            "updated_at" => "2022-12-15 04:30:21",
        ]);
    }
}
