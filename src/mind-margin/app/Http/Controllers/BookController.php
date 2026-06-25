<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function show(Book $book, Request $request)
    {
        $book = $book->load([
            'publicReviews' => fn($reviewQuery) =>
                $reviewQuery->with(['user:id,name']),
            'notes' => fn($noteQuery) =>
                $noteQuery->ownedBy(Auth::id()),
        ]);

        $book->loadAvg('reviews', 'score');

        $tab = $request->query('tab', 'reviews');

        return view('books.show', compact('book', 'tab'));
    }
}
