<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Book;
use App\Http\Requests\ReviewRequest;

class ReviewController extends Controller
{
    public function store(ReviewRequest $request, Book $book)
    {
        $validated = $request->validated();

        Review::create([
            'user_id' => auth()->id(),
            'book_id' => $book->id,
            'score' => $validated['score'],
            'title' => $validated['title'],
            'content' => $validated['content'],
            'is_public' => $validated['is_public'],
        ]);

        return back();
    }
}
