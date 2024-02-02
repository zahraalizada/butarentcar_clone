<?php

namespace Database\Seeders;

use App\Models\PrivacyPolicy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrivacyPolicySeeder extends Seeder
{

    public function run(): void
    {
//        DB::table('privacy_policies')->truncate();
       $data = [
           ['id' => 1 ]
       ];

       PrivacyPolicy::query()->insert($data);








    }
}
