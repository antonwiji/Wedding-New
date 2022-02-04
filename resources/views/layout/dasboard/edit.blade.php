@extends('layout.dasboard.main')

@section('content')
<form action="" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
<h2>Tema Classic</h2>
<!-- Data Mempelai Pria dan Perempuan -->
<div class="bg-dark p-3 rounded shadow">
   <input type="hidden" name="email_create" value="{{Auth::User()->email}}">
   <input type="hidden" name="slug">
    <h2>Data Diri Mempelai</h2>
    <div class="row">
        <div class="col-6 mb-3">
        <label for="nama_laki" class="form-label">Nama Pria</label>
        <input name="nama_lengkap_l" type="text" class="form-control" id="nama_laki" placeholder="contoh: Anton wijaya" value="{{old('nama_lengkap_l', $undangan->nama_lengkap_l)}}">
        </div>
        <div class="col-6 mb-3">
        <label for="nama_perempuan" class="form-label">Nama Perempuan</label>
        <input name="nama_lengkap_p" type="text" class="form-control" id="nama_perempuan" placeholder="contoh: Regita" value="{{old('nama_lengkap_p', $undangan->nama_lengkap_p)}}">
        </div>
        <div class="col-6 mb-3">
        <label for="nama_panggilan_l" class="form-label">Nama Pangilan Pria</label>
        <input name="nama_panggilan_l" type="text" class="form-control" id="nama_panggilan_l" placeholder="contoh: Anton wijaya" value="{{old('nama_panggilan_l', $undangan->nama_panggilan_l)}}">
        </div>
        <div class="col-6 mb-3">
        <label for="nama_panggilan_perempuan" class="form-label">Nama Panggilan Perempuan</label>
        <input name="nama_panggilan_p" type="text" class="form-control" id="nama_panggilan_perempuan" placeholder="contoh: Regita" value="{{old('nama_panggilan_p', $undangan->nama_panggilan_p)}}">
        </div>
        <div class="row">
            <div class="col-6 mb-3">
                <label for="formFile" class="form-label">Foto Pria</label>
                <input class="form-control" type="file" name="image_pria">
                <img width="250" src="/src/mempelai/{{$foto_mempelai[0]}}">
            </div>
            <div class="col-6 mb-3">
                <label for="formFile" class="form-label">Foto Wanita</label>
                <input class="form-control" type="file" name="image_wanita">
                <img width="250" src="/src/mempelai/{{$foto_mempelai[1]}}">
            </div>
        </div>
    </div>
</div>
<!-- End Data mempelai -->
<!-- Data Wali Mempelai -->
<div class="bg-primary p-3 rounded shadow mt-3">
    <h2>Data Wali Mempelai</h2>
    <div class="row">
        <div class="col-6 mb-3">
        <label for="nama_bapak_l" class="form-label">Nama Bapak Pria</label>
        <input name="nama_bpk_l" type="text" class="form-control" id="nama_bapak_l" placeholder="contoh: Syamsul" value="{{old('nama_bpk_l', $undangan->nama_bpk_l)}}">
        </div>
        <div class="col-6 mb-3">
        <label for="nama_ibu_l" class="form-label">Nama Ibu Pria</label>
        <input name="nama_ibu_l" type="text" class="form-control" id="nama_ibu_l" placeholder="contoh: Regita" value="{{old('nama_ibu_l', $undangan->nama_ibu_l)}}">
        </div>
        <div class="col-6 mb-3">
        <label for="nama_bpk_p" class="form-label">Nama Bapak Perempuan</label>
        <input name="nama_bpk_p" type="text" class="form-control" id="nama_bpk_p" placeholder="contoh: Anton wijaya" value="{{old('nama_bpk_p', $undangan->nama_bpk_p)}}">
        </div>
        <div class="col-6 mb-3">
        <label for="nama_ibu_p" class="form-label">Nama Ibu Perempuan</label>
        <input name="nama_ibu_p" type="text" class="form-control" id="nama_ibu_p" placeholder="contoh: Regita" value="{{old('nama_ibu_p', $undangan->nama_ibu_p)}}">
        </div>
    </div>
</div>
<!-- End Data Wali Mempelai -->
<!-- Akun Sosial Media -->
<div class="container">
    <div class="row d-flex justify-content-around">
            <div class="col-md-5 bg-success p-3 rounded shadow mt-3">
        <h4>Laki-laki</h4>
            <div class="col-12 mb-3">
                <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switchfbl" checked>
                <label class="form-check-label" for="switchfb">Facebook</label>
                </div>
                    <div id="sfacebookl">
                        <label for="facebook" class="form-label">facebook</label>
                        <input name="facebookl" type="text" class="form-control" id="facebook" placeholder="Akun Facebook" value="{{old('facebookl', $undangan->facebookl)}}">
                    </div>
            </div>
            <div class="col-12 mb-3">
                <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switchigl" checked>
                <label class="form-check-label" for="switchig">Instagram</label>
                </div>
                    <div id="sinstagraml">
                        <label for="instagram" class="form-label">instagram</label>
                        <input name="instagraml" type="text" class="form-control" id="instagram" placeholder="Akun Instagram" value="{{old('instagraml', $undangan->instagraml)}}">
                    </div>
            </div>
        </div>
        <div class="col-md-5 bg-success p-3 rounded shadow mt-3">
        <h4>Perempuan</h4>
            <div class="col-12 mb-3">
                <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switchfbp" checked>
                <label class="form-check-label" for="switchfbp">Facebook</label>
                </div>
                    <div id="sfacebookp">
                        <label for="facebook" class="form-label">facebook</label>
                        <input name="facebookp" type="text" class="form-control" id="facebook" placeholder="Akun Facebook" value="{{old('facebookp', $undangan->facebookp)}}">
                    </div>
            </div>
            <div class="col-12 mb-3">
                <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switchigp" checked>
                <label class="form-check-label" for="switchigp">Instagram</label>
                </div>
                    <div id="sinstagramp">
                        <label for="instagram" class="form-label">instagram</label>
                        <input name="instagramp" type="text" class="form-control" id="instagram" placeholder="Akun Instagram" value="{{old('instagramp', $undangan->instagramp)}}">
                    </div>
            </div>
    </div>
    </div>
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Galeri Foto</label>
  <input class="form-control" type="file" name="image[]" value="17e62166fc8586dfa4d1bc0e1742c08b.jpeg" multiple>


  <div class="row">
    @foreach($galeris as $galeri)
            <div class="col-3 mt-3">
            <img width="200" src="/{{$galeri}}">
            </div>
    @endforeach
  </div>

</div>


<!-- Tanggal Pernikahan -->
<div class="row">
<div class="col-6 mt-3">
        <label for="Tanggal" class="form-label">Tanggal Pernikahan</label>
        <input name="tanggal_penikahan" type="date" class="form-control" id="Tanggal" value="{{$date_edit}}">
        </div>

</div>
<!-- End Tanggal Pernikahan -->
<!-- Alamat Google Map -->
    <div class="col-12 mt-3 mb-4">
        <label for="alamat" class="form-label">Alamat</label>
        <input name="alamat" type="text" class="form-control" id="alamat" value="{{old('alamat', $undangan->alamat)}}">
    </div>
    <div class="col-12 mt-3 mb-4">
        <label for="alamat" class="form-label">Link Google Map</label>
        <input name="google_map" type="text" class="form-control" id="alamat" value="{{old('google_map', $undangan->google_map)}}">
    </div>
        <input name="tema_id" type="hidden">
<!-- End Alamat Google Map -->

        <button class="btn btn-primary" type="submit"> Buat Undangan</button>
</div>
</form>

@section('jquery')

    <script>

        function sosial(tombol, target){
            $(tombol).click(function () {
                $(target).toggle(500);
            });
        }
        $(document).ready(function (){

            sosial('#switchfbl', '#sfacebookl');
            sosial('#switchigl', '#sinstagraml');
            sosial('#switchfbp', '#sfacebookp');
            sosial('#switchigp', '#sinstagramp');
            
        }); 
    </script>

@endsection

@endsection
 
