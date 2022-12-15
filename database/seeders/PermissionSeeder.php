<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            "id" => 1,
            "name" => "edit_posts"
        ]);

        DB::table('permissions')->insert([
            "id" => 2,
            "name" => "create_posts"
        ]);

        DB::table('permissions')->insert([
            "id" => 3,
            "name" => "moderate_posts"
        ]);

        DB::table('permissions')->insert([
            "id" => 4,
            "name" => "manage_community"
        ]);
    }
}
