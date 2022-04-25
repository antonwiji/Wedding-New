<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\Undangan;
use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UndanganController extends Controller
{
    
    public function index(){
        return view('layout.dasboard.undangan', [
            'musics' => Music::all()
        ]);
    }

    public function store(Request $request){

        $undangan = $request->validate([
            'email_create' => 'required',
            'slug' => '',
            'nama_lengkap_l' => 'required',
            'nama_lengkap_p' => 'required',
            'nama_panggilan_l' => 'required',
            'nama_panggilan_p' => 'required',
            'nama_bpk_l' => 'required',
            'nama_ibu_l' => 'required',
            'nama_bpk_p' => 'required',
            'nama_ibu_p' => 'required',
            'facebookl' => '',
            'instagraml' => '',
            'facebookp' => '',
            'instagramp' => '',
            'music' => '',
            'buku_tamu_id' => '',
            'image' => 'required',
            'tema_id' => '',
            'alamat' => '',
            'google_map' => '',
            'tanggal_penikahan'   => 'required'
        ]);
        

        $undangan['slug'] = $undangan['nama_panggilan_l'].'&'.$undangan['nama_panggilan_p']; 
        $undangan['buku_tamu_id'] = 1;
        $undangan['tema_id'] = 1;

        $pria = md5(rand(20,50));
        $wanita = md5(rand(20,50));
        $ext_pria = strtolower($request->file(['image_pria'])->getClientOriginalExtension());
        $ext_wanita = strtolower($request->file(['image_wanita'])->getClientOriginalExtension());
        $nama_full_pria = $pria.'.'.$ext_pria;
        $nama_full_wanita = $wanita.'.'.$ext_wanita;
        $request->file(['image_pria'])->move('src/mempelai/', $nama_full_pria);
        $request->file(['image_wanita'])->move('src/mempelai/', $nama_full_wanita);
        
        $image = array();

        if($files = $undangan['image']){

            foreach($files as $file){
                $image_name = md5(rand(20, 200));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'image/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $image[] = $image_url;
            }
        }

        $foto = implode('|', $image);
        $undangan['image_mempelai'] = $nama_full_pria.'|'.$nama_full_wanita;
        $undangan['image'] = $foto;
       
        Undangan::create($undangan);

        return redirect('/create')->with('succes', 'Berhasil Membuat Undangan');
        
    }

    public function show(Undangan $undangan){

        $date = $undangan['tanggal_penikahan'];

        $mempelai = explode('|',$undangan['image_mempelai']);

        $pesans = DB::table('pesans')->select(['nama', 'pesan', 'created_at'])->where('id_pesan', '=' , $undangan->id)->get();
        $galeris = explode('|', $undangan['image']);
        return view('layout.themes.classic.classic',[
                    'undangan' => $undangan,
                    'tanggal' => $date,
                    'date' => $date->format('D, d M Y'),
                    'galeris' => $galeris,
                    'pesans' => $pesans,
                    'mempelai_wanita' => $mempelai[1],
                    'mempelai_pria' => $mempelai[0]
            ]);
            
    }

    public function sent(Request $request){
        
        $validator = Validator::make($request->all(),[
            'id_pesan' => 'required',
            'nama' => 'required',
            'pesan' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 400,
                'error' => 'Gagal Memasukan data'
            ]);
        }

        $validator = new Pesan;
        $validator->id_pesan = $request['id_pesan'];
        $validator->nama = $request['nama'];
        $validator->pesan = $request['pesan'];

        $validator->save();
        return response()->json([
            'status' => 200,
            'success' => 'berhasil mengirim Pesan'
        ]);

        
    }

    public function inbox(Undangan $undangan){
        $pesans = DB::table('pesans')->select(['nama', 'pesan', 'created_at'])->where('id_pesan', '=' , $undangan->id)->get();

        return response()->json([
            'data' => $pesans,
        ]);
    }
}
