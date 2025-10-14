<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil AdminSeeder (dan seeder lain jika ada)
        $this->call([
            AdminSeeder::class,
        ]);
    }
}
