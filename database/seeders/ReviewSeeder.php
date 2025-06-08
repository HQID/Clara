<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            [
                'user_id' => 2,
                'review' => 'Mobil yang sangat nyaman dan irit bahan bakar.',
                'rating' => 5,
                'mobil_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'review' => 'Sangat puas dengan performa mobil ini, cocok untuk perjalanan jauh.',
                'rating' => 4,
                'mobil_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'review' => 'Mobil keluarga yang sangat luas dan nyaman.',
                'rating' => 5,
                'mobil_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'review' => 'SUV yang tangguh dan cocok untuk segala medan.',
                'rating' => 4,
                'mobil_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'review' => 'Mobil ekonomis dengan fitur yang cukup lengkap.',
                'rating' => 4,
                'mobil_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
