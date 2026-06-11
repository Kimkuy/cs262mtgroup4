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
            ],
             [
                'name' => 'EFC Cap',
                'description' => 'Structured snapback with embroidered EFC logo. One size fits all.',
                'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnriBp97X4lZ_B5jYHi1wkF2kmnUdK3TcO1w&s',
                'badge' => null,
                'shop_url' => 'https://vshopkh.com/',
            ],
            [
                'name' => 'EFC Mousepad',
                'description' => 'Extended gaming mousepad with EFC branding — smooth surface, non-slip base.',
                'image_path' => 'https://cdn.escharts.com/uploads/public/69d/635/ab5/69d635ab5947e875312605.png',
                'badge' => null,
                'shop_url' => 'https://vshopkh.com/',
            ],
        ];

        foreach ($items as $item) {
            Merchandise::updateOrCreate(
        ['name' => $item['name']], // 1st array: Columns to look up if the item already exists
        $item                      // 2nd array: The rest of the data to insert or update
    );
        }
    }
}