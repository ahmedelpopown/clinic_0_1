<?php

namespace Database\Seeders;

 use App\Models\majors;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class majorsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       majors::factory()->count(25)->create();
    }
}
