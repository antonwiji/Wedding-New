<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function show(){
        return view('layout.dasboard.music', [
            'datas' => Music::all(),
        ]);
    }

    public function add(){
        return view('layout.dasboard.addmusic');
    }
}
