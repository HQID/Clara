<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mobils')->insert([
            [
                'name' => 'Toyota Avanza',
                'desc' => 'Mobil keluarga yang nyaman untuk perjalanan dalam kota.',
                'price' => 300000,
                'img' => 'https://thumb.katadata.co.id/frontend/thumbnail/2025/01/04/zigi-6778ae7446b0e-toyota-avanza-bekas_910_512.jpg',
            ],
            [
                'name' => 'Honda Civic',
                'desc' => 'Mobil sedan sporty untuk perjalanan bisnis atau pribadi.',
                'price' => 500000,
                'img' => 'https://hondabintang.com/wp-content/uploads/2023/03/Honda-Civic-Type-R.webp',
            ],
            [
                'name' => 'Suzuki Ertiga',
                'desc' => 'Mobil MPV yang cocok untuk perjalanan bersama keluarga.',
                'price' => 350000,
                'img' => 'https://suzukicakra.com/wp-content/uploads/2024/05/key_img01-2.webp',
            ],
            [
                'name' => 'Mitsubishi Pajero',
                'desc' => 'SUV tangguh untuk perjalanan luar kota atau medan berat.',
                'price' => 700000,
                'img' => 'https://frankfurt.apollo.olxcdn.com/v1/files/j19tsergqmu51-RO/image;s=1020x765',
            ],
            [
                'name' => 'Daihatsu Xenia',
                'desc' => 'Mobil keluarga ekonomis untuk kebutuhan sehari-hari.',
                'price' => 250000,
                'img' => 'https://imgcdnused.carbay.com/tr:w-500,h-333/car_image/62024/1719874505380.jpeg',
            ],
        ]);
    }
}
