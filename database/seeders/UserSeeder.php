<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
             
                 ])     ;
                 $email = 'admin@app.com';
                 $existingUser = User::where('email', $email)->first();
                 
                 if (!$existingUser) {
                    User::factory()->count(25)->create() ;

                 }
             }
                
    }
 
             
    
 
