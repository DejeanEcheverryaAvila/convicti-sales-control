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
        $this->call(InsertUsersSeeder::class);
        $this->call((InsertUnitsSeeder::class));
        $this->call((InsertDirectoratesSeeder::class));
        $this->call((InsertSellerUnitSeeder::class));
    }
}
