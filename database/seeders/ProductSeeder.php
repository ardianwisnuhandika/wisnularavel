<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'nama' => 'GO WIZ Fixie Pro',
                'deskripsi' => 'Sepeda Fixie premium dengan frame chromoly yang superior dan komponen berkualitas tinggi. Cocok untuk pengendara yang mengutamakan performa dan gaya.',
                'harga' => 7499000,
                'stok' => 10,
                'gambar' => 'products/fixie-pro.jpg',
                'kategori' => 'Fixie',
                'slug' => 'fixie-pro'
            ],
            [
                'nama' => 'GO WIZ Fixie Tsunami',
                'deskripsi' => 'Sepeda Fixie premium dengan frame aluminium alloy yang ringan dan responsif. Desain modern dengan komponen pilihan untuk pengalaman berkendara terbaik.',
                'harga' => 5999000,
                'stok' => 15,
                'gambar' => 'products/fixie-tsunami.jpg',
                'kategori' => 'Fixie',
                'slug' => 'fixie-tsunami'
            ],
            [
                'nama' => 'GO WIZ Road Elite',
                'deskripsi' => 'Sepeda road bike premium dengan frame carbon fiber yang ultra ringan. Dilengkapi dengan groupset Shimano Ultegra untuk performa maksimal.',
                'harga' => 15999000,
                'stok' => 8,
                'gambar' => 'products/road-elite.jpg',
                'kategori' => 'Roadbike',
                'slug' => 'road-elite'
            ],
            [
                'nama' => 'GO WIZ Road Pro',
                'deskripsi' => 'Road bike dengan frame carbon yang ringan dan responsif. Dilengkapi dengan groupset Shimano 105 untuk performa profesional.',
                'harga' => 12999000,
                'stok' => 12,
                'gambar' => 'products/road-pro.jpg',
                'kategori' => 'Roadbike',
                'slug' => 'road-pro'
            ],
            [
                'nama' => 'GO WIZ Road Sport',
                'deskripsi' => 'Road bike entry level dengan frame aluminium alloy yang ringan. Dilengkapi dengan groupset Shimano Claris untuk pengendara pemula.',
                'harga' => 8999000,
                'stok' => 20,
                'gambar' => 'products/road-sport.jpg',
                'kategori' => 'Roadbike',
                'slug' => 'road-sport'
            ],
            [
                'nama' => 'GO WIZ Road Cervélo P5',
                'deskripsi' => 'Cervélo P5 Disc mengutamakan aerodinamika dan efisiensi. Frame carbon fiber dengan desain aerodinamis untuk performa maksimal.',
                'harga' => 200999000,
                'stok' => 5,
                'gambar' => 'products/road-cervelo.jpg',
                'kategori' => 'Roadbike',
                'slug' => 'road-cervelo'
            ],
            [
                'nama' => 'GO WIZ Fixie Cervélo',
                'deskripsi' => 'Fixie stylish untuk gaya urban dengan frame chromoly yang ringan. Desain minimalis dengan komponen berkualitas tinggi.',
                'harga' => 99500000,
                'stok' => 7,
                'gambar' => 'products/fixie-cervelo.jpg',
                'kategori' => 'Fixie',
                'slug' => 'fixie-cervelo'
            ],
            [
                'nama' => 'GO WIZ Road Canyon',
                'deskripsi' => 'Road bike ringan untuk latihan dan kompetisi. Frame carbon fiber dengan geometri yang agresif untuk performa maksimal.',
                'harga' => 95999000,
                'stok' => 6,
                'gambar' => 'products/road-canyon.jpg',
                'kategori' => 'Roadbike',
                'slug' => 'road-canyon'
            ],
            [
                'nama' => 'GO WIZ Fixie Look',
                'deskripsi' => 'Desain aerodinamis, rangka full carbon, dan performa tanpa kompromi. Fixie premium untuk pengendara yang mengutamakan gaya dan performa.',
                'harga' => 68499000,
                'stok' => 9,
                'gambar' => 'products/fixie-look.jpg',
                'kategori' => 'Fixie',
                'slug' => 'fixie-look'
            ],
            [
                'nama' => 'GO WIZ Road Trek',
                'deskripsi' => 'Road bike profesional dengan teknologi terkini. Frame carbon fiber dengan sistem suspensi terintegrasi untuk kenyamanan maksimal.',
                'harga' => 65000000,
                'stok' => 4,
                'gambar' => 'products/road-trek.jpg',
                'kategori' => 'Roadbike',
                'slug' => 'road-trek'
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
} 