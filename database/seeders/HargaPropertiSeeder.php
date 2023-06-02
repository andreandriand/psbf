<?php

namespace Database\Seeders;

use App\Models\HargaProperti;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HargaPropertiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hargas = [
            [
                'id' => 1,
                'id_properti' => 1,
                'harga' => 50000,
                'durasi' => 'Harian',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'id_properti' => 1,
                'harga' => 300000,
                'durasi' => 'Mingguan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'id_properti' => 1,
                'harga' => 1000000,
                'durasi' => 'Bulanan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'id_properti' => 2,
                'harga' => 1000000,
                'durasi' => 'Bulanan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'id_properti' => 2,
                'harga' => 10000000,
                'durasi' => 'Tahunan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 6,
                'id_properti' => 3,
                'harga' => 30000,
                'durasi' => 'Harian',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 7,
                'id_properti' => 3,
                'harga' => 200000,
                'durasi' => 'Mingguan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 8,
                'id_properti' => 3,
                'harga' => 500000,
                'durasi' => 'Bulanan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 9,
                'id_properti' => 4,
                'harga' => 200000,
                'durasi' => 'Harian',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 10,
                'id_properti' => 4,
                'harga' => 1000000,
                'durasi' => 'Mingguan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 11,
                'id_properti' => 4,
                'harga' => 3000000,
                'durasi' => 'Bulanan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 12,
                'id_properti' => 4,
                'harga' => 30000000,
                'durasi' => 'Tahunan',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        for ($i = 1; $i < 39; $i++) {
            $hargas[] = [
                'id' => 12 + $i,
                'id_properti' => fake()->numberBetween(5, 20),
                'harga' => rand(10000, 50000000),
                'durasi' => fake()->randomElement(['Harian', 'Mingguan', 'Bulanan', 'Tahunan']),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        HargaProperti::insert($hargas);
    }
}
