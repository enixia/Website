<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnigmaController extends Controller
{
    public function enigma1()
    {
      return view('enigma/1');
    }
    public function enigma2()
    {
      return view('enigma/2');
    }
    public function enigma3()
    {
      return view('enigma/3');
    }
}
