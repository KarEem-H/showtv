<?php

namespace Database\Seeders;

use App\Models\Series;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Series::create([
            'title' => 'Breaking Bad',
            'description' => 'Breaking Bad is an American television series created by Vince Gilligan.',
            'airing_time' => json_encode([
                "days" =>['Monday','Thursday'],
                "time" => "20:30"
            ]),
        ]);
    }
}
