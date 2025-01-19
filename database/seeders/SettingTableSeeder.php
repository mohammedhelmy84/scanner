<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'name' => 'موقع الشركة',
            'logo' => 'logo.png',
            'description' => 'موقع الشركة',
            'phone' => '123456789',
            'email' => "kareemoii37@gmail.com"
        ]);
    }
}
