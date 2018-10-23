@extends('layouts/app')

@section('content')

<form action="{{ action('BookController@store') }}" method="post">
    <?= csrf_field() ?>

    <div class="form-group">

      <label>Title</label>

      <input type="text" name="title" class="form-control">

    </div>

    <div class="form-group">

      <label>Authors</label>

      <input type="text" name="authors" class="form-control">

    </div>

    <div class="form-group">

      <label>Image</label>

      <input type="text" name="image" class="form-control">

    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>

@endsection