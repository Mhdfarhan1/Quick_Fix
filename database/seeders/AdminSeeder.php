<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'adminquickfix@gmail.com'], // bisa ubah email
            [
                'name' => 'Administrator',
                'password' => Hash::make('admin123'), // 🔐 password di-hash manual
                'role' => 'admin',
                'phone' => '08123456789',
                'alamat' => 'Kantor Pusat',
                'profile' => 'default.png', // opsional
            ]
        );
    }
}
