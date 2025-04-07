<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Anime & Game', 
                'description' => 'Cosplay outfits inspired by famous anime, manga, and games. Includes costumes of main characters, villains, and unique armor or outfits from the gaming world.'
            ],
            [
                'name' => 'Modernized Traditional', 
                'description' => 'Traditional clothing redesigned with a modern touch, allowing the wearer to maintain cultural heritage while staying stylish and trendy.'
            ],
            [
                'name' => 'Traditional Costumes of Nations & Ethnic Groups', 
                'description' => 'A collection of iconic traditional costumes from different countries and ethnic groups, such as Kimono (Japan), Hanbok (Korea), Sari (India), Áo dài (Vietnam), and many more.'
            ],
            [
                'name' => 'Lolita & Fashion Cosplay', 
                'description' => 'Lolita, Harajuku, and various other fashion-inspired cosplay styles such as Gothic Lolita, Sweet Lolita, and Punk Lolita. These outfits range from elegant and feminine to bold and edgy.'
            ],
            [
                'name' => 'Princess Dresses', 
                'description' => 'Luxurious and glamorous dresses inspired by fairy tales and famous princess characters. Perfect for parties, performances, or anyone who loves a royal and elegant style.'
            ],
        ]);
    }
}
