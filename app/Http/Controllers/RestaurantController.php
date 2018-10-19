<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = view('restaurants/index');

        return $content;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        

       

    }

    public function price()
    {

        $restaurants = Restaurant::orderBy('average_cost_for_two', 'desc')
                                ->limit(10)
                                ->get();

          
                                
                                dd($restaurants);

        // return view('restaurants/prices', compact('restaurants'));
        
    }
}

