<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create','store');
    }

    public function index()
    {
        $books = Book::limit(100)->get();
        
        return view("books/index", [
            "books" => $books
        ]);
    }

    public function create() {

        $view = view('books/create');
        return $view;
    }

    public function store(Request $request) {

        $book = Book::create($request->all());
        return $book;

    }
}
