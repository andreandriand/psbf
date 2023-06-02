<?php

namespace Database\Seeders;

use App\Models\Pesanan;
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

        Pesanan::insert($pesanans);
    }
}
