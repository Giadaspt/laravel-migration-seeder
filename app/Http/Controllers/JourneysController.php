<?php

namespace App\Http\Controllers;

use App\Journey;
use Illuminate\Http\Request;

class JourneysController extends Controller
{
    public function index(){

        $journeys = Journey::all();

        return view('journeys', compact('journeys'));
    }
}
