<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Slot;
use App\Models\Booking;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(100)->create();

        $this->call(
            [
                UsersTableSeeder::class,
            ]
        );
        $this->call(
            [
                SpotsTableSeeder::class,
            ]
        );

        Slot::factory(100)->create();

        //Booking::factory(100)->create();
    }
}
