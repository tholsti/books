<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $restaurant = Restaurant::find($id);
        
<<<<<<< HEAD
        $content = view('restaurants/index');

        return $content;


        
=======
        $content = view('restaurants/show', [
            
        ]);

        return $content;
>>>>>>> aeaacc717a17026d6d1d56b0757212148f760847
    }
}
