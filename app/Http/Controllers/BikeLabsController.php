<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BikeLabsController extends Controller
{
    public function index()
    {
        return view('bikelabs.home');
    }
}
