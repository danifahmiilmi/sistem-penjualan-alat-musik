<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstrumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $instruments = [
            [
                'name' => 'Bass Elektrik',
                'brand' => 'Yamaha',
                'price' => 1500000.00,
                'description' => 'Bass elektik berkualitas tinggi dengan suara yang dalam dan kuat.',
                'image' => 'assets/images/bass-elektrik-ibanez.jpg',
                'type' => 'string',
                'stock' => 5,
                'production_year' => 2024,
            ],
            [
                'name' => 'Biola',
                'brand' => 'Stentor',
                'price' => 2500000.00,
                'description' => 'Biola dengan nada yang jernih dan nyaman dimainkan untuk pemula hingga menengah.',
                'image' => 'assets/images/biola.jpg',
                'type' => 'string',
                'stock' => 5,
                'production_year' => 2025,
            ],
            [
                'name' => 'Drum Set',
                'brand' => 'Pearl',
                'price' => 5000000.00,
                'description' => 'Drum set lengkap untuk para drummer profesional.',
                'image' => 'assets/images/drum-set-tama.jpg',
                'type' => 'percussion',
                'stock' => 5,
                'production_year' => 2020,
            ],
            [
                'name' => 'Gitar Akustik',
                'brand' => 'Yamaha',
                'price' => 3000000.00,
                'description' => 'Gitar akustik berkualitas tinggi dengan suara yang jernih.',
                'image' => 'assets/images/gitar-akustik-yamaha.jpg',
                'type' => 'string',
                'stock' => 5,
                'production_year' => 2023,
            ],
            [
                'name' => 'Gitar Elektrik',
                'brand' => 'Fender',
                'price' => 4000000.00,
                'description' => 'Gitar elektrik berkualitas tinggi dengan suara yang bervariasi.',
                'image' => 'assets/images/gitar-elektrik-fender.jpg',
                'type' => 'string',
                'stock' => 5,
                'production_year' => 2022,
            ],
            [
                'name' => 'Keyboard Yamaha',
                'brand' => 'Yamaha',
                'price' => 6000000.00,
                'description' => 'Keyboard profesional dengan berbagai sound dan fitur.',
                'image' => 'assets/images/keyboard-yamaha-psr-e373.jpg',
                'type' => 'keyboard',
                'stock' => 5,
                'production_year' => 2026,
            ],
            [
                'name' => 'Piano Digital',
                'brand' => 'Steinway & Sons',
                'price' => 20000000.00,
                'description' => 'Piano akustik berkualitas tinggi dengan suara yang indah.',
                'image' => 'assets/images/piano-digital-roland.jpg',
                'type' => 'keyboard',
                'stock' => 5,
                'production_year' => 2022,
            ],
            [
                'name' => 'Saxophone',
                'brand' => 'Selmer',
                'price' => 8000000.00,
                'description' => 'Saxophone profesional dengan suara yang kaya dan bertenaga.',
                'image' => 'assets/images/saxophone-alto-yamaha.jpg',
                'type' => 'wind',
                'stock' => 5,
                'production_year' => 2021,
            ],
            [
                'name' => 'Terompet',
                'brand' => 'Yamaha',
                'price' => 5000000.00,
                'description' => 'Terompet dengan suara yang cerah dan responsif untuk berbagai gaya bermain.',
                'image' => 'assets/images/terompet.jpg',
                'type' => 'wind',
                'stock' => 5,
                'production_year' => 2023,
            ],
            [
                'name' => 'Ukulele',
                'brand' => 'Kala',
                'price' => 1500000.00,
                'description' => 'Ukulele kecil dengan suara yang ceria dan nyaman untuk dimainkan.',
                'image' => 'assets/images/ukulele-kala.jpg',
                'type' => 'string',
                'stock' => 5,
                'production_year' => 2024,
            ],
        ];

        foreach ($instruments as $instrument) {
            DB::table('instruments')->updateOrInsert(
                ['name' => $instrument['name']],
                $instrument
            );
        }
    }
}
