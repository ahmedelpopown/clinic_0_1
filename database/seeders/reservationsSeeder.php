<?php

namespace Database\Seeders;

use App\Models\doctors;
use App\Models\reservations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class reservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        reservations::factory()
        ->count(5)
->has(doctors::factory()->count(10))
        ->create();

    }
}
