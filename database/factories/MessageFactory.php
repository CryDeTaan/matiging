<?php

namespace Database\Factories;

use App\Models\TeamMember;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraphs(rand(2, 5), true),
            'likes' => $this->faker->numberBetween(50, 250),
            'replies' => $this->faker->numberBetween(0, 50),
            'views' => $this->faker->numberBetween(500, 10000),
            'author_id' => TeamMember::inRandomOrder()->first()->id,
        ];
    }
}
