<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie; // colleghiamo il db movie al controller

class HomeController extends Controller
{
    public function index() { 
       
        $allMovies = Movie::all(); // creo una varibile che va a chiedere tutti i film del db 
        // dump($allMovies[0]->title);
        
        return view('home', compact('allMovies')); // passa alla view l'array dei singoli libri
    }
}
