@extends('layouts.app')

@section('content')
<a href="{{action('BookController@index')}}" class="btn btn-default">Go back</a>
<h1>{{$book->title}}</h1>
<div>
  {!!$book->authors!!}
</div>
<div>
    <img src="{!!$book->image!!}" alt="{{$book->title}}">
  </div>

<hr>
<div>
   Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, voluptatibus sit eos aliquam similique aut dolore vero repudiandae esse? Laborum porro, deserunt corrupti iure rem suscipit aperiam odit nobis quos!Nisi reiciendis labore, harum delectus dolorum commodi! Illo necessitatibus amet ipsa eligendi porro exercitationem magnam. Facere, modi dolor alias eos eum quia quo numquam, dolores beatae dolorem quis consequuntur minima?
  </div>

@endsection