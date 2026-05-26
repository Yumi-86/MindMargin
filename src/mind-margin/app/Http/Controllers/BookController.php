<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function show(Book $book, Request $request)
    {
        $notes = $book->notes()
            ->where('user_id', Auth::id())
            ->get();

        $tab = $request->query('tab', 'reviews');

        return view('books.show', compact('book', 'notes', 'tab'));
    }
}
