@extends('layout.dasboard.main')

@section('content')

<form action="/create/themes/elegan/post" method="post" enctype="multipart/form-data" id="form">
    @csrf
<h2>Tema Elegan</h2>
<div class="bg-dark p-3 rounded shadow mb-3">
<label for="formFile" class="form-label">Hero Image</label>
  <input class="form-control" type="file" name="hero_image" id="hero_image" onchange="previewImage('#hero_image', '.hero-image')">
  <img width="250" class="hero-image img-fluid mt-3">
</div>
<!-- Data Mempelai Pria dan Perempuan -->
<div class="bg-dark p-3 rounded shadow">
   <input type="hidden" name="email_create" value="{{Auth::User()->email}}">
   <input type="hidden" name="slug">
    <h2>Data Diri Mempelai</h2>
    <div class="row">
        <div class="col-6 mb-3">
        <label for="nama_laki" class="form-label">Nama Pria</label>
        <input name="nama_lengkap_l" type="text" class="form-control" id="nama_laki" placeholder="contoh: Anton wijaya">
        </div>
        <div class="col-6 mb-3">
        <label for="nama_perempuan" class="form-label">Nama Perempuan</label>
        <input name="nama_lengkap_p" type="text" class="form-control" id="nama_perempuan" placeholder="contoh: Regita">
        </div>
        <div class="col-6 mb-3">
        <label for="nama_panggilan_l" class="form-label">Nama Pangilan Pria</label>
        <input name="nama_panggilan_l" type="text" class="form-control" id="nama_panggilan_l" placeholder="contoh: Anton wijaya">
        </div>
        <div class="col-6 mb-3">
        <label for="nama_panggilan_perempuan" class="form-label">Nama Panggilan Perempuan</label>
        <input name="nama_panggilan_p" type="text" class="form-control" id="nama_panggilan_perempuan" placeholder="contoh: Regita">
        </div>
        <div class="row">
            <div class="col-6 mb-3">
                <label for="formFile" class="form-label">Foto Pria</label>
                <input class="form-control" type="file" name="image_pria" id="image_pria" onchange="previewImage('#image_pria', '.preview-image-l')">
                <img width="250" class="preview-image-l img-fluid mt-3">
            </div>
            <div class="col-6 mb-3">
                <label for="formFile" class="form-label">Foto Wanita</label>
                <input class="form-control" type="file" name="image_wanita" id="image_wanita" onchange="previewImage('#image_wanita', '.preview-image-p')">
                <img width="250" class="preview-image-p img-fluid mt-3">
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
        <input name="nama_bpk_l" type="text" class="form-control" id="nama_bapak_l" placeholder="contoh: Syamsul">
        </div>
        <div class="col-6 mb-3">
        <label for="nama_ibu_l" class="form-label">Nama Ibu Pria</label>
        <input name="nama_ibu_l" type="text" class="form-control" id="nama_ibu_l" placeholder="contoh: Regita">
        </div>
        <div class="col-6 mb-3">
        <label for="nama_bpk_p" class="form-label">Nama Bapak Perempuan</label>
        <input name="nama_bpk_p" type="text" class="form-control" id="nama_bpk_p" placeholder="contoh: Anton wijaya">
        </div>
        <div class="col-6 mb-3">
        <label for="nama_ibu_p" class="form-label">Nama Ibu Perempuan</label>
        <input name="nama_ibu_p" type="text" class="form-control" id="nama_ibu_p" placeholder="contoh: Regita">
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
                        <input name="facebookl" type="text" class="form-control" id="facebook" placeholder="Akun Facebook">
                    </div>
            </div>
            <div class="col-12 mb-3">
                <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switchigl" checked>
                <label class="form-check-label" for="switchig">Instagram</label>
                </div>
                    <div id="sinstagraml">
                        <label for="instagram" class="form-label">instagram</label>
                        <input name="instagraml" type="text" class="form-control" id="instagram" placeholder="Akun Instagram">
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
                        <input name="facebookp" type="text" class="form-control" id="facebook" placeholder="Akun Facebook">
                    </div>
            </div>
            <div class="col-12 mb-3">
                <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switchigp" checked>
                <label class="form-check-label" for="switchigp">Instagram</label>
                </div>
                    <div id="sinstagramp">
                        <label for="instagram" class="form-label">instagram</label>
                        <input name="instagramp" type="text" class="form-control" id="instagram" placeholder="Akun Instagram">
                    </div>
            </div>
    </div>
    </div>
</div>
<div class="mb-3">
  <label class="form-label">Galeri Foto</label>
  <input class="form-control" type="file" name="image[]" multiple id="galeri" onchange="imagePreview('galeri', 'form', 'image-preview')">

  <div id="image-preview">

  </div>
    
</div>
<!-- Tanggal Pernikahan -->
<div class="row">

<div class="col-6">
        <label for="Tanggal" class="form-label">Tanggal Pernikahan</label>
        <input name="tanggal_penikahan" type="date" class="form-control" id="Tanggal">
        </div>
        <div class="col-6">
        <label for="Tanggal" class="form-label">Music</label>
        <select class="form-select" aria-label="Default select example" name="music">
            <option selected>Pilih Music</option>
            <option value="">Tanpa Music</option>
            @foreach($musics as $music)
            <option value="{{$music->nama_music}}">{{$music->nama_music}}</option>
            @endforeach
        </select>
        </div>

</div>
<!-- End Tanggal Pernikahan -->
<!-- Alamat Google Map -->
    <div class="col-12 mt-3 mb-4">
        <label for="alamat" class="form-label">Alamat</label>
        <input name="alamat" type="text" class="form-control" id="alamat">
    </div>
    <div class="col-12 mt-3 mb-4">
        <label for="alamat" class="form-label">Link Google Map</label>
        <input name="google_map" type="text" class="form-control" id="alamat">
    </div>
        <input name="tema_id" type="hidden">
<!-- End Alamat Google Map -->
<!-- Additional Data (Events & Gifts) -->
    <div class="bg-secondary p-3 rounded shadow mt-3">
    <h2 class="mb-3">Additional Data</h2>

    <!-- Intro Undangan -->
    <div class="mb-3">
        <label class="form-label" for="events_intro">Intro Undangan</label>
        <textarea id="events_intro" class="form-control" rows="3"
        placeholder="Dengan penuh kebahagiaan, kami mengundang Anda untuk hadir pada momen istimewa kami."></textarea>
    </div>

    <hr class="border-light">

    <!-- Daftar Event -->
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h5 class="mb-0">Daftar Event</h5>
        <button type="button" class="btn btn-outline-light btn-sm" id="add_event">+ Tambah Event</button>
    </div>

    <div id="events_wrapper"></div>

    <hr class="border-light">

    <!-- Daftar Gifts -->
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h5 class="mb-0">Daftar Rekening (Gifts)</h5>
        <button type="button" class="btn btn-outline-light btn-sm" id="add_gift">+ Tambah Rekening</button>
    </div>

    <div id="gifts_wrapper"></div>
    </div>

    <!-- Hidden input untuk menyimpan JSON sebelum submit -->
    <input type="hidden" name="additional_data" id="additional_data">


        <button class="btn btn-primary" type="submit"> Buat Undangan</button>
</div>
</form>

@section('jquery')

    <script>
         // ==== TEMPLATE BUILDER ====
  function eventItemTemplate() {
    return `
      <div class="card border-0 shadow-sm mb-3 event-item">
        <div class="card-body">
          <div class="row g-2">
            <div class="col-md-3">
              <label class="form-label">Judul</label>
              <input type="text" class="form-control event-title" placeholder="Akad Nikah / Resepsi">
            </div>
            <div class="col-md-3">
              <label class="form-label">Tanggal</label>
              <input type="date" class="form-control event-date">
            </div>
            <div class="col-md-3">
              <label class="form-label">Waktu</label>
              <input type="text" class="form-control event-time" placeholder="10.00 WIB / 12.00 - 15.00 WIB">
            </div>
            <div class="col-md-3">
              <label class="form-label">Tempat</label>
              <input type="text" class="form-control event-place" placeholder="Masjid Agung">
            </div>
          </div>
          <div class="mt-2 text-end">
            <button type="button" class="btn btn-sm btn-danger remove-event">Hapus</button>
          </div>
        </div>
      </div>
    `;
  }

  function giftItemTemplate() {
    return `
      <div class="card border-0 shadow-sm mb-2 gift-item">
        <div class="card-body">
          <div class="row g-2">
            <div class="col-md-3">
              <label class="form-label">Bank/Provider</label>
              <input type="text" class="form-control gift-provider" placeholder="BRI / Mandiri / BCA">
            </div>
            <div class="col-md-5">
              <label class="form-label">Nama Pemilik</label>
              <input type="text" class="form-control gift-ownership" placeholder="Anton Wijaya">
            </div>
            <div class="col-md-4">
              <label class="form-label">No. Rekening</label>
              <input type="text" class="form-control gift-norek" placeholder="12312312323">
            </div>
          </div>
          <div class="mt-2 text-end">
            <button type="button" class="btn btn-sm btn-danger remove-gift">Hapus</button>
          </div>
        </div>
      </div>
    `;
  }

  // ==== HELPERS ====
  function formatDateToSql(dateStr) {
    // input: "YYYY-MM-DD" -> output: "YYYY-MM-DD 00:00:00.000"
    if (!dateStr) return null;
    return `${dateStr} 00:00:00.000`;
  }

  function buildAdditionalDataPayload() {
    const intro = $('#events_intro').val()?.trim() || '';

    const events = [];
    $('#events_wrapper .event-item').each(function () {
      const title = $(this).find('.event-title').val()?.trim() || '';
      const dateRaw = $(this).find('.event-date').val() || '';
      const time = $(this).find('.event-time').val()?.trim() || '';
      const place = $(this).find('.event-place').val()?.trim() || '';

      // Kalau semua kosong, skip
      if (!title && !dateRaw && !time && !place) return;

      events.push({
        title: title,
        date: formatDateToSql(dateRaw),
        time: time,
        place: place
      });
    });

    const gifts = [];
    $('#gifts_wrapper .gift-item').each(function () {
      const provider = $(this).find('.gift-provider').val()?.trim() || '';
      const ownership = $(this).find('.gift-ownership').val()?.trim() || '';
      const noRek = $(this).find('.gift-norek').val()?.trim() || '';

      // Kalau semua kosong, skip
      if (!provider && !ownership && !noRek) return;

      gifts.push({
        provider: provider,
        ownership: ownership,
        noRek: noRek
      });
    });

    return {
      events: {
        intro: intro,
        event: events
      },
      gifts: gifts
    };
  }

        // ==== INIT & EVENTS ====
  $(document).ready(function () {

    // -- Kode kamu yang sudah ada 
    function sosial(tombol, target){ $(tombol).click(function () { $(target).toggle(500); }); }
    sosial('#switchfbl', '#sfacebookl');
    sosial('#switchigl', '#sinstagraml');
    sosial('#switchfbp', '#sfacebookp');
    sosial('#switchigp', '#sinstagramp');

    // -- Additional Data: default 1 event + 1 gift kosong --
    $('#events_wrapper').append(eventItemTemplate());
    $('#gifts_wrapper').append(giftItemTemplate());

    // Tambah item
    $('#add_event').on('click', function(){ 
        $('#events_wrapper').append(eventItemTemplate()); 
    });
    $('#add_gift').on('click', function(){ $('#gifts_wrapper').append(giftItemTemplate()); });

    // Hapus item
    $(document).on('click', '.remove-event', function(){ $(this).closest('.event-item').remove(); });
    $(document).on('click', '.remove-gift', function(){ $(this).closest('.gift-item').remove(); });

    // Pada saat submit form -> susun JSON ke hidden input
    $('#form').on('submit', function () {
      const payload = buildAdditionalDataPayload();
      $('#additional_data').val(JSON.stringify(payload));
      // Tidak perlu preventDefault, biarkan form submit normal
    });
  });

  // ==== PREVIEW IMAGE (kode kamu yang sudah ada, tetap dibiarkan) ====
  function previewImage(section, target){
    const image = document.querySelector(section);
    const imgPreview = document.querySelector(target);
    imgPreview.style.display = 'block';
    const ofReader = new FileReader();
    ofReader.readAsDataURL(image.files[0]);
    ofReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result; 
    }
  }
    </script>
    <script src="/js/script.js"></script>

@endsection

@endsection
 
