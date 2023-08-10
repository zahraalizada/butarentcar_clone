<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//
//        $this->call([CurrencySeeder::class]);
//        $this->call([SocialSeeder::class]);
//        $this->call([PrivacyPolicySeeder::class]);
//        $this->call([PrivacyPolicyTranslationSeeder::class]);
//        $this->call([QuestAnswerSeeder::class]);
//        $this->call([QuestAnswerTranslationSeeder::class]);
        $this->call([SettingSeeder::class]);

    }
}
