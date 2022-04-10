<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeamMember>
 */
class TeamMemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $url = 'https://source.unsplash.com/random/?face';
        $response = Http::withOptions([
            'allow_redirects' => false,
        ])->get($url);

        $location = $response->header('Location');
        $imageUrl = Str::of($location)->explode('?')[0];

        sleep(1);

        return [
            'name' => $this->faker->name(),
            'handle' => $this->faker->domainWord(),
            'image_url' => $imageUrl,
        ];
    }
}
