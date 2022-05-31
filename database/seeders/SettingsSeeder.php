<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'key' => 'number',
                'value' => '+998 95 555 55 55',
                'icon' => 'phone.svg',
            ],
            [
                'key' => 'instagram',
                'value' => '#',
                'icon' => 'instagram.svg',
            ],
            [
                'key' => 'youtube',
                'value' => '#',
                'icon' => 'youtube.svg',
            ],
            [
                'key' => 'telegram',
                'value' => '#',
                'icon' => 'telegram.svg',
            ],
            [
                'key' => 'header_title',
                'value' => 'Find the solutions for your awesome constructions',
            ],
        ];

        foreach ($data as $d) {
            Settings::create([
                'key' => $d['key'],
                'value' => $d['value'],
                'icon' => $d['icon'] ?? null,
            ]);
        }
    }
}
