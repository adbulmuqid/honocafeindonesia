<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Tambahkan ini untuk mengimpor model User
use Illuminate\Support\Facades\Hash; // Tambahkan ini untuk mengimpor Hash

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Buat pengguna baru
        User::create([
            'name' => 'afandi',
            'email' => 'afandi@gmail.com',
            'password' => Hash::make('inipassword')
        ]);
    }
}
