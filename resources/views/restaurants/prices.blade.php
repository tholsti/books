@extends('restaurants/layout')

@section('content')
    
  <div class="most_expensive_restaurants">
  <h1>List of 10 most expensive restaurants</h1>
  <div style="display:flex; flex-wrap:wrap; justify-content: center;">
  @foreach ($restaurants as $restaurant)

    <div class="card" style="width: 38rem; text-align: center;">
      <img class="card-img-top" src="{{ $restaurant->image_url }}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{ $restaurant->name }}</h5>
        <p class="card-text">Average cost for two</p>
        <p class="card-text">{{ $restaurant->average_cost_for_two }} IDR</p>
      </div>
    </div>

  @endforeach
</div>
  </div>
@endsection