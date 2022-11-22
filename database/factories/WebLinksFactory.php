<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WebLinks>
 */
class WebLinksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'link' => $this->faker->url(),
            'star' => $this->faker->numberBetween(1, 5),
            'type' => $this->faker->randomElement(['Video', "Photo", "WebCam"]),
            'mobile' => $this->faker->boolean()
        ];
    }
}
