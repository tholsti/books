<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
   public function index()

{

$content = view('restaurants/index');

return $content;

}


public function show() 
{




}
}
