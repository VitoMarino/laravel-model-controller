<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Restituisce la homepage
    public function index(){
        return view("pages.home");
    }

    // Restituisce la pagina con i film
    public function aboutUs(){
        return view("pages.aboutUs");
    }
}
