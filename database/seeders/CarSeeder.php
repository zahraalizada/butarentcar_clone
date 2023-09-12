<?php

namespace Database\Seeders;

use App\Models\Cars;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->truncate();
        $data = [
            [
                'name' => 'Cruze',
                'price' => '65',
                'brand' => 'Schevrolet',
                'driver_status_id' => '2'
            ],
            [
                'name' => 'Elantra',
                'price' => '60',
                'brand' => 'Hundai',
                'driver_status_id' => '2'
            ],
            [
                'name' => 'Cerato',
                'price' => '55',
                'brand' => 'Kia',
                'driver_status_id' => '2'
            ],
            [
                'name' => 'Viano',
                'price' => '100',
                'brand' => 'Mercedes',
                'driver_status_id' => '1'
            ],
            [
                'name' => 'Sprinter',
                'price' => '250',
                'brand' => 'Mercedes',
                'driver_status_id' => '1'
            ],
            [
                'name' => 'S 500',
                'price' => '400',
                'brand' => 'Mercedes',
                'driver_status_id' => '1'
            ],

        ];

        Cars::query()->insert($data);
    }
}
