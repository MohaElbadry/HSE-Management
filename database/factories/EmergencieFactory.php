<?php

namespace Database\Factories;

use App\Models\Projet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Emergencie>
 */
class EmergencieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'lib' => $this->faker->word,
            'description' => $this->faker->sentence,
            'projet_id' => function () {
                return Projet::factory()->create()->id;
            },
        ];
    }
    

}
