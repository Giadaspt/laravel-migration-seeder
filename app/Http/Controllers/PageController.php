<?php

namespace App\Http\Controllers;

use App\Journey;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $journeys = Journey::all();


        return view('home', compact('journeys'));
    }

}
