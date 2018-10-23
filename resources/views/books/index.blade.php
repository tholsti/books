@extends('layouts.app')

@section('content')

    <h1>Books</h1>


    <div id="books">

      @foreach ($books as $book)

        <div class="book">

        <img src="{{ $book->image }}" alt="title"/><br><br>
        
            <h2>{{ $book->title }}</h2>
        
            <h3>{{ $book->authors }}</h3>
        
        </div>

        @endforeach

    </div>

@endsection