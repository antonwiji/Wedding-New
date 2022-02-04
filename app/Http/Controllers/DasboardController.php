<?php

namespace App\Http\Controllers;

use App\Models\Undangan;
use App\Models\User;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DasboardController extends Controller
{
    public function index(){

        if(Auth::user()->nama == 'admin'){
            $undangan = Undangan::all();
        }else {

        $email = Auth::user()->email;
        $undangan = DB::table('undangans')
                ->select(['id', 'nama_lengkap_l', 'slug'])
                ->where('email_create', '=' , $email)->get();
        }
    
        return view('layout.dasboard.dasboard',[
            'user' => Auth::user(),
            'datas' => $undangan
        ]);
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function hapus(Undangan $undangan){
        
        function hapusimage($images , $path = ''){
            for($i = 0; $i < count($images); $i++ ){
                File::delete($path.$images[$i]);
            }
        }

        $images = explode('|', $undangan->image);
        $mempelai = explode('|', $undangan->image_mempelai);
        hapusimage($images);
        hapusimage($mempelai, 'src/mempelai/');
    
        DB::table('undangans')->delete($undangan->id);
        return redirect()->back();
    }

    public function edit(Undangan $undangan){
        $date_edit = explode(' ', $undangan->tanggal_penikahan);
        $foto_mempelai = explode('|', $undangan->image_mempelai);
        $galeri = explode('|', $undangan->image);       
        return view('layout.dasboard.edit', [
            'undangan' => $undangan,
            'date_edit' => $date_edit[0],
            'foto_mempelai' => $foto_mempelai,
            'galeris' => $galeri
        ]);
    }

    public function update(Request $request, Undangan $undangan){
        $crodential = $request->validate([

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
            'buku_tamu_id' => '',
            'tema_id' => '',
            'alamat' => '',
            'google_map' => '',
            'tanggal_penikahan'   => 'required'

        ]);

        if(empty($request['image'])){
            $crodential['image'] = $undangan->image;
        }else{

            $image = array();

            if($files = $request['image']){
    
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
            
            $crodential['image'] = $foto;
        }        

        $crodential['slug'] = $undangan->slug;
        $crodential['tema_id'] = $undangan->tema_id;
        Undangan::where('id', $undangan->id)
                    ->update($crodential);

        return redirect('/dasbord')->with('update_succes', 'Data Berhasil diupdate');

    }
}
