<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'isbn' => fake()->regexify('[A-Z]{5}[0-4]{3}'),
            'google_books_id' => fake()->regexify('[A-Z]{5}[0-4]{3}'),
            'title' => fake()->sentence(3),
            'author' => fake()->randomElement(['村上春樹', '東野圭吾', '湊かなえ']),
            'thumbnail' => fake()->imageUrl(200, 300, 'books'),
        ];
    }
}
