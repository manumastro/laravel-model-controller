<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){


        return view('home');
    }

    public function contatti(){

        return view('contatti');
    }

    public function chisiamo(){
                
        return view('chisiamo');
    }
}
