<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//uso Movie
use App\Movie;

class MovieController extends Controller
{
    public funtion index(){

        $movies = Movie::all();

        return view('home', compact('movies'));
    }
}
