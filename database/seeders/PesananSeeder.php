<?php

namespace Database\Seeders;

use App\Models\Pesanan;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pesanans = [
            [
                'id' => 1,
                'id_transaksi' => 1,
                'start_date' => now(),
                'end_date' => now()->addDays(30),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        for ($i = 1; $i < 25; $i++) {
            $start = fake()->dateTimeBetween('-1 years', 'now')->format('Y-m-d H:i:s');
            $end = (new DateTime($start))->modify('+30 day')->format('Y-m-d H:i:s');
            $pesanans[] = [
                'id' => 1 + $i,
                'id_transaksi' => fake()->numberBetween(1, 25),
                'start_date' => $start,
                'end_date' => $end,
                'created_at' => $start,
                'updated_at' => $start
            ];
        }

        Pesanan::insert($pesanans);
    }
}
