<?php

namespace Database\Seeders;

use App\Models\Merchandise;
use Illuminate\Database\Seeder;

class MerchandiseSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'name' => 'EFC National Jersey',
                'description' => 'Official Team Cambodia national esports jersey. Wear the flag with pride.',
                'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnn_HfoNiQvRvpLi6xTTMhZ0sb_bZyrDS3SQ&s',
                'badge' => 'New',
                'shop_url' => 'https://vshopkh.com/',
            ],
            [
                'name' => 'EFC Hoodie',
                'description' => 'Premium pullover hoodie featuring the EFC crest. Perfect for tournament days.',
                'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7AsDxGl7vUmI3b-QUeN5JSUfm857PgiPhBw&s',
                'badge' => null,
                'shop_url' => 'https://vshopkh.com/',
            ],
            [
                'name' => 'EFC Tracksuit Jacket',
                'description' => 'Official tracksuit jacket worn by Team Cambodia esports athletes at major competitions.',
                'image_path' => 'https://d3h9qea4qy4169.cloudfront.net/600px_PRO_Esports_v3_allmode_205ff692bb.png',
                'badge' => 'Popular',
                'shop_url' => 'https://vshopkh.com/',
            ]
        ];

        foreach ($items as $item) {
            Merchandise::create($item);
        }
    }
}