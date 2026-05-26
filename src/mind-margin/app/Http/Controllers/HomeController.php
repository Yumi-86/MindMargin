<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Review;

class HomeController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('created_at', 'desc')
            ->with(['latestReview', 'reviews'])
            ->withAvg('reviews', 'score')
            ->take(3)
            ->get();
            

        return view('home.index', compact('books'));
    }
}
