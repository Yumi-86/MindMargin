<?php

namespace Database\Factories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Book;

/**
 * @extends Factory<Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'book_id' => Book::factory(),
            'score' => fake()->numberBetween(1, 5),
            'title' => fake()->sentence(),
            'content' => fake()->text(50),
            'is_public' => fake()->boolean(60),
            'status' => true,
        ];
    }
}
