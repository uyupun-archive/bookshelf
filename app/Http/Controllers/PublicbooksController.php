<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class PublicbooksController extends Controller
{
    public function index() {
        $books = Book::where('published', '<=', date('Y-m-d') . '00:00:00')->orderBy('created_at', 'desc')->paginate(5);
        return view('public_books', [
            'books' => $books
        ]);
    }

    public function description(Book $books) {
        return view('public_booksedit', [
            'book' => $books
        ]);
    }
}