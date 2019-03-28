<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Accueil
    public function Accueil(){
      return view('Accueil');
    }
}
