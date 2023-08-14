<?php

namespace Database\Seeders;

use App\Models\DriverStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriverStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('socials')->truncate();
        $data = [
            [
                'name' => 'withdriver'
            ],
            [
                'name' => 'withoutdriver'
            ],

        ];

        DriverStatus::query()->insert($data);
    }
}
