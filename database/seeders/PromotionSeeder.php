<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Promotion;

class PromotionSeeder extends Seeder
{
    public function run()
    {
        //Dummy data
        $promotions = [
            [
                'title' => 'Cyber Quest: The Awakening',
                'description' => 'Rasakan petualangan futuristik dengan grafis menakjubkan dan gameplay inovatif.',
                'image' => '',
            ],
            [
                'title' => 'Legends of Eldoria',
                'description' => 'Jelajahi dunia fantasi penuh sihir dan bertarung melawan monster legendaris.',
                'image' => '',
            ],
            [
                'title' => 'Street Racer X',
                'description' => 'Balapan liar di jalanan kota dengan mobil-mobil keren dan nitro boost.',
                'image' => '',
            ],
            [
                'title' => 'Survival Instinct: Apocalypse',
                'description' => 'Bertahan hidup di dunia post-apocalyptic dengan zombie yang haus darah.',
                'image' => '',
            ],
            [
                'title' => 'Shadow Ninja: Rise of Ronin',
                'description' => 'Jadilah ninja bayangan dan lawan para samurai dalam duel mematikan.',
                'image' => '',
            ],
        ];

        foreach ($promotions as $promo) {
            Promotion::create($promo);
        }
    }
}
