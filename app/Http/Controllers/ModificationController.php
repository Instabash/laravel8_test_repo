<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModificationController extends Controller
{
    public function index()
    {
        return view('bikelabs.modification.modification-home');
    }
}
