<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;
class PizzaList extends Controller
{
    public function index( )
    {
   
   return "hi";
    }
    public function display(Request $request)
    {
        $posts = Pizza::orderBy('id')->get();
        return response()->json($posts);
      // return "hi";
    }
}
