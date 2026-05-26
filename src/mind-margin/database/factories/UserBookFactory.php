<?php

namespace Database\Factories;

use App\Models\UserBook;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Book;
use App\Models\Review;

/**
 * @extends Factory<UserBook>
 */
class UserBookFactory extends Factory
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
            'status' => fake()->randomElement([
                'reading',
                'completed',
                'want_to_read',
                'favorite',
            ]),
        ];
    }
}
