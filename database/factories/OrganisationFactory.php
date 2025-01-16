<?php

namespace Database\Factories;

use App\Models\Organisation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Organisation>
 */
class OrganisationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'address1' => fake()->streetAddress(),
            'town' => fake()->city(),
            'postcode' => fake()->postcode(),
            'country' => 'United Kingdom',
            'email' => fake()->unique()->safeEmail(),
            'telephone' => fake()->unique()->phoneNumber(),
            'contact' => fake()->name()
        ];
    }
}
