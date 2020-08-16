<?php

use Illuminate\Database\Seeder;

class ArtworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artworks')->insert([
            [
                'title' => 'Snot',
                'media' => 'Adobe Photoshop',
                'image' => 'wdZ2JvjZDTCRj1h1G7cRKEh0zJpesfHiJrfvRXMh.png',
                'thumbnail' => 'e5s6RybVsDPTvmXUVh7ydNEbPi9ZcaSLvL7APAc1.png',
                'alt_text' => 'A green, bald goblin attempting to eat the fire from a torch'
            ],
            [
                'title' => 'Pokémon Trainer',
                'media' => 'Adobe Photoshop',
                'image' => 'bS8TbWHCquVrLFyH8oOWbmhU9nkzgNWkwEmtCXmH.png',
                'thumbnail' => '6nIm1HjTCE67Pp0xq8qGIQxGp7mcVCo64YAU1fHx.png',
                'alt_text' => 'A smiling, female Pokémon trainer in a baseball cap'
            ],
            [
                'title' => 'Anno the Wizard',
                'media' => 'Adobe Photoshop',
                'image' => 'aB2gSYjkyaK1a6GQpX8Pcqx7x1ONkeqYCIbafmuZ.png',
                'thumbnail' => 'zo0vOmKTTannLXykd9R97IJ5V4AwDQHylIs99yM8.png',
                'alt_text' => 'A grey-haired wizard in a robe holding a flaming sword'
            ]
        ]);
    }
}
