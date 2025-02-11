<?php

namespace Database\Seeders;

use App\Models\admin\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Truncate Cities
      //  DB::table('cities')->truncate();
        ///// Insert All Citizen
        $citizens = [
            [
                'name' => ['ar' => '15 مايو', 'en' => '15 May'],
                'governrate_id' => 1
            ],
            [
                'name' => ['ar' => 'الازبكية', 'en' => 'Al Azbakeyah'],
                'governrate_id' => 1
            ],
            [
                'name' => ['ar' => 'البساتين', 'en' => 'Al Basatin'],
                'governrate_id' => 1
            ],
            [
                'name' => ['ar' => 'التبين', 'en' => 'Tebin'],
                'governrate_id' => 1
            ],

        ];
        foreach ($citizens as $city) {
            City::create($city);
        }
    }
}
