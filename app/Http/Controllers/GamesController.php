<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function topTenGames()
    {
        return view('game-aggregator.top-ten-games');
    }
}
