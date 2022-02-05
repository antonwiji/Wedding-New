@extends('layout.themes.classic.main')

@section('content')
<section id="hero">

    <div class="hero-bg">
        <div class="hero-text">

            <div class="font-elsie fs-4"><p>Undangan Penikahan</p></div>
            <span class="border-line font-dancing">
            {{$undangan->nama_panggilan_p}} Dan {{$undangan->nama_panggilan_l}}
            </span>

            <div class="font-elsie fs-4 mb-2"><p>{{$date}}</p></div>

        </div>
    </div>
    </section>
    <section id="quotes">
        <div class="container">
            <div class="row top-mg">
                <div class="col text-center">
                    <p class="font-poppins putih">" Kalau Kamu Mengingatku, Maka Aku Tidak Peduli Jika Orang Lain Lupa "</p>
                </div>
            </div>
        </div>
    </section>

<section class="profil top-mg">
    <img src="/src/componennt/wave.svg">
   <div class="bg-putih">
       <div class="container">
           <div class="row">
               <h2 class="top-mg font-pacifico">Mempelai</h2>
           </div>
           <div class="row">
               <div class="col-md-5 d-flex justify-content-center">
                    <div class="fr-wanita">
                        <img class="img-fluid" src="/src/componennt/bingka1.png" alt="bingka">
                        <img class="img-fluid img-wanita" src="/src/mempelai/{{$mempelai_wanita}}" alt="cewek">
                        <div class="row text-center">
                                <h2 class="font-dancing sz-large ungu">{{$undangan->nama_lengkap_p}}</h2>
                                <p class="font-poppins sz-small">Putri Dari Ibu {{$undangan->nama_ibu_p}} & Bapak {{$undangan->nama_bpk_p}}</p>
                                @if($undangan->instagramp)
                                <div class="row">
                                    <div class="d-flex justify-content-center">
                                    <div class="col-2 pd-0">
                                        <img class="img-fluid instagram" src="/src/componennt/instagram.jpg" alt="instgram">
                                    </div>
                                    <div class="col-4 pt-2">
                                        <p class="font-poppins">{{$undangan->instagramp}}</p>
                                    </div>
                                    </div>
                                </div>
                                @else

                                @endif
                                @if($undangan->facebookp)
                                <div class="row">
                                    <div class="d-flex justify-content-center">
                                    <div class="col-2 pd-0">
                                        <img class="img-fluid instagram" src="/src/componennt/facebook.jpg" alt="facebook">
                                    </div>
                                    <div class="col-4 pt-2">
                                        <p class="font-poppins">{{$undangan->facebookp}}</p>
                                    </div>
                                    </div>
                                </div>
                                @else
                                    
                                @endif
                        </div>
                    </div>
               </div>
               <div class="col-md-2 d-flex justify-content-center align-items-center">
                   <h2 class="font-pacifico">&</h2>
                </div>
<!-- Cowok -->
               <div class="col-md-5 d-flex justify-content-center">
               <div class="fr-cowok">
                        <img class="img-fluid" src="/src/componennt/bingka2.png" alt="bingka">
                        <img class="img-fluid img-cowok" src="/src/mempelai/{{$mempelai_pria}}" alt="cowok">
                        <div class="row text-center">
                                <h2 class="font-dancing sz-large ungu">{{$undangan->nama_lengkap_l}}</h2>
                                <p class="font-poppins sz-small">Putra Dari Ibu {{$undangan->nama_ibu_l}} & Bapak {{$undangan->nama_bpk_l}}</p>
                                @if($undangan->instagraml)
                                <div class="row">
                                    <div class="d-flex justify-content-center">
                                    <div class="col-2 pd-0">
                                        <img class="img-fluid instagram" src="/src/componennt/instagram.jpg" alt="instgram">
                                    </div>
                                    <div class="col-4 pt-2">
                                        <p class="font-poppins">{{$undangan->instagraml}}</p>
                                    </div>
                                    </div>
                                </div>
                                @else
                                    
                                @endif

                                @if($undangan->facebookl)
                                <div class="row">
                                    <div class="d-flex justify-content-center">
                                    <div class="col-2 pd-0">
                                        <img class="img-fluid instagram" src="/src/componennt/facebook.jpg" alt="facebook">
                                    </div>
                                    <div class="col-4 pt-2">
                                        <p class="font-poppins">{{$undangan->facebookl}}</p>
                                    </div>
                                    </div>
                                </div>
                                @else
                                    
                                @endif
                        </div>
                    </div>
               </div>
           </div>
           <h2 class="sz-middle font-pacifico top-mg">Menghitung Hari</h2>
           <div class="row d-flex justify-content-center text-center font-cormorant putih sz-middle">
           <div class="col-3 bg-ungu m-3">
               <div id="hari">NA</div>
               <p>Hari</p>
           </div> 
           <div class="col-3 bg-ungu m-3">
               <div id="jam">NA</div>
               <p>Jam</p>
           </div> 
           <div class="col-3 bg-ungu m-3">
               <div id="menit">NA</div>
               <p>Menit</p>
           </div> 
           <div class="col-3 bg-ungu m-3">
               <div id="detik">NA</div>
               <p>Detik</p>
           </div> 
            </div>
       </div>
       
       <img src="/src/componennt/lokasi_wave.svg">
   </div>
</section>

<section class="top-mg">
    <h2 class="font-pacifico putih">Galeri</h2>
    <div class="container">
        <div class="mt-5">
            <div class="row">
                @foreach($galeris as $galeri)
                <div class="col-6 mb-3">
                    <img class="img-fluid" src="{{$galeri}}" alt="">
                </div>
                @endforeach
            
            </div>
            </div>
    </div>
</section>

<section class="top-mg">
    <h2 class="font-pacifico putih">Lokasi</h2>
    <div class="container">
    <div class="lokasi">
    <img class="mt-4" src="/src/componennt/calendar.svg">
    <p class="font-josefin mt-2"><b>{{$date}}</b>
    <br>
    <small>09.30 - 12.30 WIB</small>
    </p>
    <img src="/src/componennt/map.svg">
    <p class="font-josefin mt-2"><b>{{$undangan->alamat}}</b></p>
        <div class="img img-fluid">

            {!!$undangan->google_map!!}
        </div>

    <img src="/src/componennt/covid.svg" alt="covid">
    </div>
</div>
</section>

<section>
    
        <div class="bg-abu">
            <div class="container mt-5 d-flex justify-content-center">
                <div class="pd-amplop">
                <div class="row">
                <h2 class="font-pacifico sz-middle">Kirim Amplop</h2>
                </div>
                <div class="row mt-5">
                <button class="btn" style="background-color:#BA4165;" type="submit"><img src="/src/componennt/amplop.svg"><span class="putih font-dancing sz-small">Kirim Amplop</span></button>
                </div>
                </div>
            </div>
        </div>
        
        <div class="bg-putih tamu-h">
            <div class="container">
                <h2 class="font-pacifico sz-middle pd-tamu">Buku Tamu</h2>
                <div class="tamu">
                    <div class="pesan putih">
                        @if($pesans->count() <= 0 )
                            <h2>data tidak ada</h2>
                        @else
                            @foreach($pesans as $pesan)
                            <p><b>{{$pesan->nama}} : {{$pesan->pesan}}</b></p>
                            <p>{{$pesan->created_at}}</p>
                            <hr>
                            @endforeach
                        @endif
                    </div>
                    <form action="" method="post">
                    @csrf
                    <input type="hidden" name="id_pesan" value="{{$undangan->id}}">
                    <!-- pesan -->
                    <div class="container">
                        <div class="mb-3 col-6">
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama" name="nama">
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px" name="pesan"></textarea>
                                <label for="floatingTextarea2">Kirim Ucapan Selamat Untuk mempelai</label>
                            </div>
                    
                        <button class="btn font-josefin mt-3" style="background-color: #ffff; width: 600;" type="submit"><b>Kirim Pesan </b></button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="bg-footer">
        <div class="text-center pt-2 font-josefin putih">Created By @anton_wiji</div>
        </div>
    </footer>

    <audio autoplay>
        <source src="audio/beatiful-in-white.mp3" type="audio/mp3">
    </audio>
   
    
    <script type="text/javascript">
        var countDate = new Date('{{$tanggal}}').getTime();

        function countWedding(){
            var now = new Date().getTime();
            gap = countDate - now;

            var detik = 1000;
            var menit = detik * 60;
            var jam = menit * 60;
            var hari = jam * 24;

            var h = Math.floor(gap / (hari));
            var j = Math.floor( (gap %(hari)) / (jam) );
            var m = Math.floor( (gap % (jam)) / (menit) );
            var d = Math.floor( (gap % (menit)) / (detik) );

            document.getElementById('hari').innerText = h;
            document.getElementById('jam').innerText = j;
            document.getElementById('menit').innerText = m;
            document.getElementById('detik').innerText = d;
        }

        setInterval( function(){
            countWedding();
        }, 1000);
    </script>
 @endsection
   