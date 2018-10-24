@extends('layouts.app')

@section('content')

    <h1>Books</h1>


    <div id="books">
      @foreach ($books as $book)
        <div class="book">
            <img src="{{ $book->image }}" alt="title"/><br><br>
            <h2>{{ $book->title }}</h2>
            <h3>Author: {{ $book->authors }}</h3>
            @if(isset($book->genres_id))
            <h3>Genre: {{ $genres[$book->genres_id-1]->name }}</h3>
            @endif
            <a href="{{action('BookController@edit', [$book->id])}}" class="btn btn-success">Update</a>
            <a href="{{action('BookController@delete', [$book->id])}}" class="btn btn-danger">Delete</a>
            <a href="{{action('BookController@show', [$book->id])}}" class="btn btn-success">Display</a>
        
        </div> <br>
            
        @endforeach
       
    </div>

@endsection