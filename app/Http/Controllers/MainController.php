<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class MainController extends Controller
{
    
    public function redirectToMainPage()
    {
       return view('main.main');
    }

    
    public function distribute(Request $request)
    {
        $validated = $request->validate([
            'number' => 'required'
        ]);

        $playersCount = $validated['number'];

        $cards = Card::all();
        if ($cards->count() < $playersCount) {
           return back()->withErrors(['number' => 'Not enough cards for this number of players.']);
        }

        //Shuffle cards randomly
        $shuffled = $cards->shuffle();

        $i = 0;
        foreach ($shuffled as $card) {
            $playerIndex = $i % $playersCount;
            $hands[$playerIndex][] = $card->symbol . $card->number;
            $i++;
        }

        return view('main.result', [
            'cards' => $hands
        ]);
    }
}
