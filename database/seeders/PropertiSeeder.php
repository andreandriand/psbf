<?php

namespace Database\Seeders;

use App\Models\Properti;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $properties = [
            [
                'id' => 1,
                'nama' => 'Villa Istana Bunga',
                'alamat' => 'Jl. Kolonel Masturi KM. 9, Parongpong, Cisarua, Kabupaten Bandung Barat, Jawa Barat 40551',
                'deskripsi' => 'Villa Istana Bunga adalah sebuah villa yang terletak di Lembang, Bandung, Jawa Barat. Villa ini memiliki 3 kamar tidur, 2 kamar mandi, ruang tamu, ruang keluarga, ruang makan, dapur, dan balkon. Villa ini juga dilengkapi dengan fasilitas kolam renang pribadi, taman, dan tempat parkir.',
                'id_user' => 2,
                'kategori' => 'Villa',
                'status' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'nama' => 'Kontrakan Taman Cibodas',
                'alamat' => 'Jl. Taman Cibodas No. 1, Cibodas, Cimahi Utara, Kota Cimahi, Jawa Barat 40513',
                'deskripsi' => 'Kontrakan Taman Cibodas adalah sebuah kontrakan yang terletak di Cimahi, Jawa Barat. Kontrakan ini memiliki 2 kamar tidur, 1 kamar mandi, ruang tamu, ruang keluarga, ruang makan, dapur, dan balkon. Kontrakan ini juga dilengkapi dengan fasilitas taman dan tempat parkir.',
                'id_user' => 2,
                'kategori' => 'Kontrakan',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'nama' => 'Kos Yudistira',
                'alamat' => 'Jl. Yudistira No. 1, Cimahi Utara, Kota Cimahi, Jawa Barat 40513',
                'deskripsi' => 'Kos Yudistira adalah sebuah kos yang terletak di Cimahi, Jawa Barat. Kos ini memiliki 1 kamar tidur, 1 kamar mandi, ruang tamu, ruang keluarga, ruang makan, dapur, dan balkon. Kos ini juga dilengkapi dengan fasilitas taman dan tempat parkir.',
                'id_user' => 2,
                'kategori' => 'Kos',
                'status' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'nama' => 'Apartemen The Jarrdin',
                'alamat' => 'Jl. Cihampelas No. 160, Cipaganti, Kec. Cihampelas, Kota Bandung, Jawa Barat 40131',
                'deskripsi' => 'Apartemen The Jarrdin adalah sebuah apartemen yang terletak di Bandung, Jawa Barat. Apartemen ini memiliki 2 kamar tidur, 1 kamar mandi, ruang tamu, ruang keluarga, ruang makan, dapur, dan balkon. Apartemen ini juga dilengkapi dengan fasilitas kolam renang pribadi, taman, dan tempat parkir.',
                'id_user' => 2,
                'kategori' => 'Apartemen',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        for ($i = 1; $i < 17; $i++) {
            $properties[] = [
                'id' => 4 + $i,
                'nama' => fake()->name,
                'alamat' => fake()->address,
                'deskripsi' => fake()->text,
                'id_user' => fake()->numberBetween(2, 6),
                'kategori' => fake()->randomElement(['Villa', 'Kontrakan', 'Kos', 'Apartemen']),
                'status' => fake()->boolean,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        Properti::insert($properties);
    }
}
