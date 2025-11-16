<?php

namespace Database\Seeders;

use App\Models\Card;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::where('email', 'test@example.com')->first();
        if (!$user) {
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
        }

        //Populate cards
        $suits = ['H', 'D', 'C', 'S'];
        $ranks = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13'];

        foreach ($suits as $suit) {
            foreach ($ranks as $rank) {
                Card::create([
                    'symbol' => $suit,
                    'number' => $rank,
                ]);
            }
        }
    }
}
