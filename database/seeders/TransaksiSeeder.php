<?php

namespace Database\Seeders;

use App\Models\Transaksi;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transaksis = [
            [
                'id' => 1,
                'id_user' => 3,
                'id_properti' => 2,
                'deskripsi' => 'Saya ingin menyewa kontrakan ini untuk 1 bulan',
                'durasi' => 'Bulanan',
                'harga' => 1000000,
                'batas_waktu_pembayaran' => now()->addDays(1),
                'waktu_pembayaran' => now(),
                'id_metode' => 1,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        for ($i = 1; $i < 25; $i++) {
            $datetime = fake()->dateTimeBetween('-1 years', 'now')->format('Y-m-d H:i:s');
            $batas = (new DateTime($datetime))->modify('+1 day')->format('Y-m-d H:i:s');
            $before = (new DateTime($datetime))->modify('-1 day')->format('Y-m-d H:i:s');

            $transaksis[] = [
                'id' => $i + 1,
                'id_user' => fake()->numberBetween(7, 10),
                'id_properti' => fake()->numberBetween(1, 20),
                'deskripsi' => fake()->sentence(100),
                'durasi' => fake()->randomElement(['Harian', 'Mingguan', 'Bulanan', 'Tahunan']),
                'harga' => fake()->numberBetween(10000, 50000000),
                'batas_waktu_pembayaran' => $batas,
                'waktu_pembayaran' => $datetime,
                'id_metode' => fake()->numberBetween(1, 4),
                'status' => true,
                'created_at' => $before,
                'updated_at' => $before
            ];
        }

        for ($i = 1; $i < 26; $i++) {
            $transaksis[] = [
                'id' => $i + 25,
                'id_user' => fake()->numberBetween(7, 10),
                'id_properti' => fake()->numberBetween(1, 20),
                'deskripsi' => fake()->sentence(100),
                'durasi' => fake()->randomElement(['Harian', 'Mingguan', 'Bulanan', 'Tahunan']),
                'harga' => fake()->numberBetween(10000, 50000000),
                'batas_waktu_pembayaran' => fake()->dateTime('now')->modify('+1 day')->format('Y-m-d H:i:s'),
                'waktu_pembayaran' => NULL,
                'id_metode' => fake()->numberBetween(1, 4),
                'status' => false,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        Transaksi::insert($transaksis);
    }
}
