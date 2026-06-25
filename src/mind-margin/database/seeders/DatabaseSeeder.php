<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserBook;
use App\Models\Review;
use App\Models\Note;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()->create();
        $userBooks = UserBook::factory()->count(5)->create([
            'user_id' => $user->id
        ]);

        foreach($userBooks as $userBook) {
            Review::factory()->create([
                'user_id' => $userBook->user_id,
                'book_id' => $userBook->book_id,
            ]);
            Note::factory()->count(2)->create([
                'user_id' => $userBook->user_id,
                'book_id' => $userBook->book_id,
            ]);
        }

        User::factory(10)->create();
    }
}
