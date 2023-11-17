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
        \App\Models\User::factory(1000)->create(); // Load users

        $this->call(EventSeeder::class); // Generate events
        $this->call(AttendeeSeeder::class); // Generate attendees
    }
}
