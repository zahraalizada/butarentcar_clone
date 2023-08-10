<?php

namespace Database\Seeders;

use App\Models\QuestAnswer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

       $data = [
           ['id' => 1 ]
       ];

       QuestAnswer::query()->insert($data);








    }
}
