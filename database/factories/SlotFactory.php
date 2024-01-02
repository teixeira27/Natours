<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Spot;
use App\Models\Slot;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slot>
 */
class SlotFactory extends Factory
{
    protected $model = Slot::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'start_time' => $this->faker->dateTimeBetween('now', '+30 days'),
            'quantity' => rand(0, 200),
            'spot_id' => Spot::all()->random()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
