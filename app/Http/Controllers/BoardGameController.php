<?php

namespace App\Http\Controllers;

use App\Models\BoardGame;
use Illuminate\Http\Request;

class BoardGameController extends Controller
{
    //
    public function create(){
return view('boardgame.create');

    }

public function library(Request $request){

// dd($request->all());
$boardgame = BoardGame::create([
    'name'=> $request->input('name'),
    'type'=> $request->input('type'),
    'players'=> $request->input('players'),
'instructor'=> $request->input('instructor')
    ]
);
    // dd('controlla il database');
    return redirect()->route('boardgame.create')->with('success','Gioco da tavolo inserito con successo');
}

}
