<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('socials')->truncate();
       $data = [
           [
               'name' => 'Facebook',
               'link' => 'www.facebook.com',
               'icon' => 'fa-brands fa-facebook'
           ],
           [
               'name' => 'Instagram',
               'link' => 'www.instagram.com',
               'icon' => 'fa-brands fa-instagram'
           ],
           [
               'name' => 'Twitter',
               'link' => 'www.twitter.com',
               'icon' => 'fa-brands fa-twitter'
           ],

       ];

       Social::query()->insert($data);








    }
}
