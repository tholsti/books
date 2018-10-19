@extends('restaurants/layout')

@section('content')
<div class="container">
    <div class="row"></div>
        <h1>Top 10 rated restaurants</h1>
        @foreach($restaurants as $key => $restaurant)
            <div class="card col-sm-6" style="margin: 2rem;">   
                <img class="card-img-top" src="{{$restaurant->image_url}}" alt="">
                <h2>Ranking {{$key + 1}}</h2>
                <h3 class="card-title">{{$restaurant->name}}</h3>
                <p class="card-text">Rating: {{$restaurant->aggregate_rating}}</p>
                <p>Location: {{$locations[$key]->locality_verbose}} <br> {{$countries[$key]->name}}</p>
                <p class="card-text">Votes: {{$restaurant->votes}}</p>
                <p>{{$restaurant->id}}</p>
                <a class="btn btn-primary" href="{{$restaurant->url}}">Visit Zomato page of {{$restaurant->name}}</a>
            </div>
        @endforeach
        </div>
    </div>
@endsection
