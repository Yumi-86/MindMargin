<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use App\Models\UserBook;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // public function index()
    // {
    //     $books = Book::orderBy('created_at', 'desc')
    //         ->with(['latestReview', 'reviews'])
    //         ->withAvg('reviews', 'score')
    //         ->take(3)
    //         ->get();

    //     return view('home.index', compact('books'));
    // }

    public function index()
    {
        $user_id = Auth::id();

        $userBooks = UserBook::where('user_id', $user_id)
            ->orderBy('created_at', 'desc')
            ->with([
                'book' => fn($query) =>
                    $query->with('latestReview')
                        ->withAvg('reviews', 'score')
            ])
            ->take(3)
            ->get();

        return view('home.index', compact('userBooks'));
    }
}
