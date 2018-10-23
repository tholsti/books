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

    public function edit($id)
    {
        $book = Book::find($id);
        $view = view('books/edit', compact('book'));
        return $view;

    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->title = $request->input('title');
        $book->authors = $request->input('authors');
        $book->image = $request->input('image');
        $book->save();
        session()->flash('success_message', 'You have successfully updated the book!');
        return redirect()->action('BookController@edit', [
            'id' => $book->id]);


    }

    public function delete($id)
    {
        $book = Book::find($id);
        $book->delete();
        session()->flash('success_message', 'You have successfully deleted the book!');
        return redirect()->action('BookController@index');

    }

    public function show($id)
    {

        $book =  Book::find($id);
        return view('books.show')->with('book', $book);

    }

   
}
