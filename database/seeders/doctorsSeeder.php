<?php

namespace Database\Seeders;

use App\Models\doctors;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class doctorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        doctors::factory()->count(25)->create();

    }
}
