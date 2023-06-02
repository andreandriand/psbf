<?php

namespace Database\Seeders;

use App\Models\Transaksi;
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

        Transaksi::insert($transaksis);
    }
}
