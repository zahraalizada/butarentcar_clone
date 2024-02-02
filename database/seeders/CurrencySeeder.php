<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('currencies')->truncate();
       $data = [
           [
               'name' => 'Manat',
               'symbol' => '₼',
               'value' => '1'
           ],
           [
               'name' => 'Dollar',
               'symbol' => '$',
               'value' => '1.70'
           ],

       ];

       Currency::query()->insert($data);








    }
}
