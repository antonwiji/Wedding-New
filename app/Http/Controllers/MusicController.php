<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

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

    public function store(Request $request){

        $validation = $request->validate([
            'nama_music' => 'required'
        ]);

        $namaMusic = $request->file(['nama_music'])->getClientOriginalName();
        $request->file(['nama_music'])->move('audio/', $namaMusic);
        $validation['nama_music'] = $namaMusic;
        Music::create($validation);
        return redirect('music/create')->with('success_add', 'Berhasil Menambahkan Music');
    }

    public function hapus(Music $music){
        
        File::delete('audio/'.$music['nama_music']);
        DB::table('music')->delete($music->id);

        return back()->with('succes_hapus', 'Berhasil Mengapus Music');
    }
}
