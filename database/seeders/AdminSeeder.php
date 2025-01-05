<?php

namespace Database\Seeders;

use App\Models\admin\Role;
use App\Models\admin\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $first_role_id = Role::first()->id;
        $admin = Admin::create([
            "name"=> "mohamed",
            "email"=> "mr319242@gmail.com",
            "password"=> bcrypt("11111111"),
            'role_id' => $first_role_id
        ]);
    }
}
