<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed data DEMO (karyawan dummy + akun login contoh).
     * Tidak boleh dijalankan di production.
     */
    public function run(): void
    {
        if (app()->environment('production')) {
            $this->command?->error('Seeder demo tidak boleh dijalankan di production.');

            return;
        }

        $this->call([
            KaryawanSeeder::class,
            UserHrSeeder::class,
            UserAtasanSeeder::class,
            UserFromKaryawanSeeder::class,
        ]);
    }
}
