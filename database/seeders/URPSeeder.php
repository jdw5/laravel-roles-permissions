<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class URPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles_permissions')->insert([
            'role_id' => 1,
            'permission_id' => 1, 
        ]);

        DB::table('roles_permissions')->insert([
            'role_id' => 1,
            'permission_id' => 2, 
        ]);

        DB::table('roles_permissions')->insert([
            'role_id' => 2,
            'permission_id' => 1, 
        ]);

        DB::table('roles_permissions')->insert([
            'role_id' => 2,
            'permission_id' => 2, 
        ]);

        DB::table('roles_permissions')->insert([
            'role_id' => 2,
            'permission_id' => 3, 
        ]);

        DB::table('roles_permissions')->insert([
            'role_id' => 3,
            'permission_id' => 1, 
        ]);

        DB::table('roles_permissions')->insert([
            'role_id' => 3,
            'permission_id' => 2, 
        ]);

        DB::table('roles_permissions')->insert([
            'role_id' => 3,
            'permission_id' => 3, 
        ]);

        DB::table('roles_permissions')->insert([
            'role_id' => 3,
            'permission_id' => 4, 
        ]);


        DB::table('users_roles')->insert([
            'user_id' => 1,
            'role_id' => 3, 
        ]);

        
        DB::table('users_permissions')->insert([
            'user_id' => 1,
            'permission_id' => 5, 
        ]);



    }
}
