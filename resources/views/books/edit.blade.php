@extends('layouts/app')

@section('content')

<form action="{{action('BookController@update', [$book->id])}}" method="post">
    <?= csrf_field() ?>

    <div class="form-group">

      <label>Title</label>

    <input value="{{$book->title}}" type="text" name="title" class="form-control">

    </div>

    <div class="form-group">

      <label>Authors</label>

      <input value="{{$book->authors}}" type="text" name="authors" class="form-control">

    </div>

    <div class="form-group">

      <label>Image</label>

      <input value="{{$book->image}}" type="text" name="image" class="form-control">

    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>

@endsection