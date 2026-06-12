<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                'title' => 'MPL KH S10 the Winner who Qualifiers For EWC in Paris 2026 ',
                'image_path' => 'https://esportsfc.org.kh/wp-content/uploads/2026/05/MPL-Cambodia-season-101.jpg',
                'author' => 'Layhout Tang',
                'published_date' => '2026-05-25',
                'content' => 'In the round robin competition, Pro Esports performed best by winning all 9 games...',
                'url' => '#',
                'filters' => '108,3',
            ],
            [
                'title' => 'Angkor Warrior, who will represent Cambodia in the Mobile Legends: Bang Bang competition at the Asian Games 2026!',
                'image_path' => 'https://preview.redd.it/cambodia-roster-for-asian-games-v0-89kovee7a25h1.jpeg?auto=webp&s=3e010ea8d288da2eecfaf939e6c6b2db0667deff',
                'author' => 'Kimkuy Ngo',
                'published_date' => '2026-04-20',
                'content' => 'EFC coordinates national team selections, appoints coaches and team managers...',
                'url' => '#',
                'filters' => '103',
            ],
            [
                'title' => 'The SEA Esports Nations Cup is coming soon in 4 competition: Crossfire: Legends, Teamfight Tactics, PUBG MOBILE, Total Football',
                'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLsCucFsTpdCEYU-6ZYpqWbubkuClniP9uLw&s',
                'author' => 'Vinchhou Phea',
                'published_date' => '2026-04-02',
                'content' => 'The inaugural SEA Esports Nations Cup (SNC) has already taken...',
                'url' => '#',
                'filters' => '103',
            ],
            [
                'title' => 'MPL Cambodia begins 10th season with an unprecedented new look',
                'image_path' => 'https://en.moonton.com/upload/image/20260402/b8eb8a05c286f609b8018e337d12bd26.jpeg',
                'author' => 'Sovanmony Reaksmey',
                'published_date' => '2026-03-30',
                'content' => 'Opening the MPL Cambodia Season 10th with news looks...',
                'url' => '#',
                'filters' => '103',
            ],
        ];

        foreach ($articles as $article) {
            News::updateOrCreate(
                ['title' => $article['title']],
                $article
            );
        }
    }
}