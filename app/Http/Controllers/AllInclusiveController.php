<?php

namespace App\Http\Controllers;

use App\Journey;
use Illuminate\Http\Request;

class AllInclusiveController extends Controller
{
    public function index(){

        $all_inclusives = Journey::where( 'meals_included', 1 )
                            ->orderBy('journey_promo')
                            ->get();

        return view('all_inclusive', compact('all_inclusives'));
    }
}
