<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id' => 1,
                'username' => 'admin',
                'email' => 'admin@mail.com',
                'password' => bcrypt('admin'),
                'firstname' => 'Admin',
                'lastname' => NULL,
                'telepon' => NULL,
                'role' => 'administrator',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'username' => 'darmansolihun',
                'email' => 'darman@mail.com',
                'password' => bcrypt('darman'),
                'firstname' => 'Darman',
                'lastname' => 'Solihun',
                'telepon' => '081234567890',
                'role' => 'owner',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'username' => 'nitaratnasari',
                'email' => 'nita@mail.com',
                'password' => bcrypt('nita'),
                'firstname' => 'Nita',
                'lastname' => 'Ratnasari',
                'telepon' => '085678901234',
                'role' => 'owner',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        for ($i = 1; $i < 4; $i++) {
            $users[] = [
                'id' => 3 + $i,
                'username' => fake()->username,
                'email' => fake()->email,
                'password' => bcrypt(fake()->password),
                'firstname' => fake()->firstname,
                'lastname' => fake()->lastname,
                'telepon' => fake()->phoneNumber,
                'role' => 'owner',
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        for ($i = 1; $i < 5; $i++) {
            $users[] = [
                'id' => 6 + $i,
                'username' => fake()->username,
                'email' => fake()->email,
                'password' => bcrypt(fake()->password),
                'firstname' => fake()->firstname,
                'lastname' => fake()->lastname,
                'telepon' => fake()->phoneNumber,
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        User::insert($users);
    }
}
