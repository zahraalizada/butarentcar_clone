<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                DB::table('settings')->truncate();
        $data = [
            [
                'logo_img' => '',
                'phone' => '+994502091072',
                'phone_wp' => '994502091072',
                'email' => 'info@butarentalcars.az',
                'address' => 'Nəcəfqulu Rəfiyev 25A',
                'address_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d759.7657509843962!2d49.875565169655516!3d40.38529621974107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d4bac424771%3A0x63ca85143e91d860!2sButa%20Rent%20a%20Car!5e0!3m2!1str!2saz!4v1691670643998!5m2!1str!2saz" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'hours' => '10:00 - 22:00',
                'copyright' => '© 2019, "Buta Rent A Car"',
                'cover_img' => '',
                'cover_title' => '',
                'cover_description' => '',


            ]
        ];

        Settings::query()->insert($data);
    }
}
