<?php

namespace Database\Seeders;

use App\Models\jenisSampah;
use App\Models\tiketSampah;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(20)->create();
        jenisSampah::factory(20)->create();
        tiketSampah::factory(100)->create();
    }
}