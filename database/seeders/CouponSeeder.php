<?php

namespace Database\Seeders;

use App\Models\admin\Coupon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Coupon::truncate();
        \App\Models\admin\Coupon::factory()->count(20)->create();
       // Coupon::factory()->count(10)->create();
    }
}
