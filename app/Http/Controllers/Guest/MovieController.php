<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::all();

        $movie = new Movie();
        $movie->title = 'Spider-man';
        $movie->original_title = 'Spider-man';
        $movie->nationality = 'USA';
        $movie->date = '2001/09/01';
        $movie->vote = 7.2;

        $movie->save();

        return view("guestMovie.index", compact("movies"));
    }
}
