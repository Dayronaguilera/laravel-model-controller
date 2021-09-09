<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie; // colleghiamo il db movie al controller

class HomeController extends Controller
{
    public function index() { 
        // return view('welcome');

        $allMovie = Movie::all();

        dump($allMovie);
    }
}
