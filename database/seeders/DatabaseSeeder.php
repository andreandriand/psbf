<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(PropertiSeeder::class);
        $this->call(HargaPropertiSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(TransaksiSeeder::class);
        $this->call(PesananSeeder::class);
    }
}
