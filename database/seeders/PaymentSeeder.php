<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payments = [
            [
                'id' => 1,
                'nama' => 'Tunai',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'nama' => 'Transfer Bank',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'nama' => 'E-Wallet',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'nama' => 'Kartu Kredit',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        Payment::insert($payments);
    }
}
