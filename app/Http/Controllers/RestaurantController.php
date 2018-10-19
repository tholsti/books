<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant; 
use App\Location;
use App\Country;


class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::orderBy('aggregate_rating', 'desc')
            ->orderBy('votes', 'desc')
            ->limit(10)
            ->groupBy('name', 'id')
            ->get();

            $locations = [];
            $countries = [];

        foreach ($restaurants as $restaurant) {
            
            $location_id = $restaurant->location_id;
            $locations[] = Location::find($location_id);

        }

        foreach ($locations as $location) {

            $country_id = $location->country_id;
            $countries[] = Country::find($country_id);

        }

        $view = view('restaurants/index')->with(compact('restaurants', 'locations', 'countries'));

        return $view;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurant = Restaurant::find($id);
        
        $location_id = $restaurant->location_id;
        $location = Location::find($location_id);

        $country_id = $location->country_id;
        $country = Country::find($country_id);
        
        $content = view('restaurants/show', [
            "restaurant" => $restaurant,
            "location" => $location,
            "country" => $country
        ]);

        return $content;
    }
}
