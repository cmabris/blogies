<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence();
        $options = ['published', 'draft', 'archived', 'pending'];
        $num = random_int(0, 3);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => $this->faker->paragraph() . "\n\n" . $this->faker->paragraph() . "\n\n" . $this->faker->paragraph(),
            'summary' => Str::substr($this->faker->paragraph(), 0, 50),
            'published_at' => random_int(0, 2)
                ? $this->faker->dateTimeBetween('-1 month', '+1 months')
                : null,
            'status' => $options[$num],
            'reading_time' => random_int(1, 10),
        ];
    }
}
