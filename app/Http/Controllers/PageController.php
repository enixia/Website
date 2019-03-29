<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Accueil
    public function Accueil(){
      return view('Accueil');
    }

    //Projets
    public function Projets(){
      return view('Accueil');
    }

    //Contact
    public function Contact(){
      return view('Accueil');
    }

    //A propos
    public function About(){
      return view('Accueil');
    }
}
