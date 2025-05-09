<?php

namespace Database\Seeders;

use App\Models\admin\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ####### لحل مشكلة لو فية علاقات بين الجداول
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Country::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $countries = [
            [
                'id' => 1,
                'phone_code' => '20',
                'name' => ['ar' => 'مصر', 'en' => 'Egypt'],
            ],
            [
                'id' => 2,
                'phone_code' => '966',
                'name' => ['ar' => 'السعودية', 'en' => 'Sudia'],
            ],
        ];
        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
