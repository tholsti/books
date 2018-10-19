@extends('restaurants/layout')

@section('content')
<section class="detail_page">
    <h1>{{ $restaurant->name }}</h1>
    <div class="d-flex">
    
        <div class="image">
                <img src="{{ $restaurant->image_url }}">
        </div>

    <div class="detail_page">
    <b>Price range</b>: 
    <?php for ($i = 0; $i < $restaurant->price_range ; $i++) {
        echo "$";
    }
    ?><br>
    <b>Rating:</b> {{ $restaurant->aggregate_rating }} <br>
    <b>Votes</b>: {{ $restaurant->votes }} <br>
    <b>Average cost for two</b>: {{ $restaurant->average_cost_for_two }} {{ $restaurant->currency }} <br>
    {{-- Created at: {{ $restaurant->created_at }} <br> --}}
    <b>Online ordering?</b> {{ $restaurant->has_online_delivery ? "Yes" : "No" }} <br>
    <b>Online table booking?</b> {{ $restaurant->has_table_booking ? "Yes" : "No" }} <br>
    <b>Location</b>: <br> 
    {{$location->locality_verbose}} <br>
    {{$country->name}}<br> 
    {{-- Rating ID: {{ $restaurant->rating_id }} <br> --}}
    <b>Zomato link</b>: <br> <a href="{{ $restaurant->url }}">{{$restaurant->url}}</a> <br>
    Cuisines: <br>
    @foreach ($restaurant->cuisines as $cuisine)
    -- {{ $cuisine['name'] }} <br>
    @endforeach
    </div>

</section>
@endsection 