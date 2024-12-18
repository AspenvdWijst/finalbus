<?php

namespace Database\Seeders;

use App\Models\festival;
use App\Models\User;
use App\Models\bus;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Aspen',
            'email' => 'aspen@festival.com',
            'email_verified_at' => now(),
            'password' => Hash::make('@dm1N???'),
            'remember_token' => Str::random(10),
            'role_id' => (2),
        ]);
        festival::factory(10)->create();
        bus::factory(30)->create();
        User::factory(10)->create();


    }
}
