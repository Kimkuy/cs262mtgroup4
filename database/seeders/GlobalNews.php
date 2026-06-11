<?php

namespace Database\Seeders;

use App\Models\GlobalNews as GlobalNewsModel;
use Illuminate\Database\Seeder;

class GlobalNews extends Seeder
{
    public function run(): void
    {
        $articles =[
            [
                'title' => 'Singapore to Host Asian Games Esports Events Qualifiers',
                'image_path' => 'https://esports.org.sg/wp-content/uploads/2026/05/Asian-Games-Qualifiers-PR-Banner.webp',
                'author' => 'Stephanie Lim',
                'published_date' => '2026-05-25',
                'content' => 'Teams from over 20 Asian nations are heading to Singapore to battle for a spot in the Aichi-Nagoya 2026 Asian Games...',
                'url' => 'https://esports.org.sg/identityv-naraka-mlbb-asian-games-qualifiers/',
                'filters' => '108,3',
            ],
            [
                'title' => 'SEA Esports Nations Cup Launched',
                'image_path' => 'https://esports.org.sg/wp-content/uploads/2026/04/ENG-SNC-Annoucement.psd.webp',
                'author' => 'Stephanie Lim',
                'published_date' => '2026-04-20',
                'content' => 'Southeast Asia establishes a structured regional framework for National Team Esports...',
                'url' => 'https://esports.org.sg/sea-esports-nations-cup-launch/',
                'filters' => '103',
            ],
       ];

        foreach ($articles as $article) {
          GlobalNewsModel::updateOrCreate(
                ['title' => $article['title']],
                $article
            );
        }
    }
}