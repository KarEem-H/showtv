<?php

namespace Database\Seeders;

use App\Models\Episode;
use App\Models\Series;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EpisodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Episode::create([
            'series_id' => Series::first()->id, // Assuming series ID 1 corresponds to "Breaking Bad"
            'title' => 'Pilot',
            'description' => 'In the pilot episode, Walter White, a struggling high school chemistry teacher, is diagnosed with terminal cancer and decides to enter the world of drug manufacturing to secure his family\'s financial future.',
            'duration' => '60m',
            'airing_time' =>json_encode([
                "days" =>['Monday'],
                "time" => "20:30"
            ]),
            'thumbnail' => 'breaking_bad_pilot_thumbnail.jpg',
            'video_asset' => 'breaking_bad_pilot.mp4',
        ]);
    }
}
