@extends('layout.themes.modern.main')

@section('content')
<!-- NAVBAR -->
<nav id="navMain" class="navbar navbar-expand-lg fixed-top border-bottom d-none d-lg-block">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#beranda"><i class="bi bi-suit-heart-fill me-2 text-danger"></i>{{ $undangan->nama_panggilan_p }} & {{ $undangan->nama_panggilan_l }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navCollapse" aria-controls="navCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navCollapse">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="#mempelai">Mempelai</a></li>
          <li class="nav-item"><a class="nav-link" href="#acara">Acara</a></li>
          <li class="nav-item"><a class="nav-link" href="#galeri">Galeri</a></li>
          <li class="nav-item"><a class="nav-link" href="#lokasi">Lokasi</a></li>
          <li class="nav-item"><a class="nav-link" href="#hadiah">Hadiah</a></li>
          <li class="nav-item"><a class="nav-link" href="#ucapan">Ucapan</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- BOTTOM NAV (mobile) -->
  <nav id="navBottom" class="bottom-nav navbar fixed-bottom d-lg-none">
    <div class="container px-0">
      <ul class="nav nav-justified w-100">
        <li class="nav-item"><a class="nav-link active" href="#beranda"><i class="bi bi-house"></i><span class="label">Beranda</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#mempelai"><i class="bi bi-people"></i><span class="label">Mempelai</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#acara"><i class="bi bi-calendar-event"></i><span class="label">Acara</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#galeri"><i class="bi bi-images"></i><span class="label">Galeri</span></a></li>
      </ul>
    </div>
  </nav>

  <!-- HERO -->
  <header id="beranda" class="hero d-flex align-items-center">
    <div class="inner container">
      <div class="tag mb-3">#{{ $undangan->slug ?? '' }}</div>
      <p class="mb-1">Kepada Yth.</p>
      <h2 class="h4 fw-semibold mb-2" id="invitee">{{ $to ?? 'Bapak/Ibu/Saudara/i' }}</h2>
      <h1 class="names mb-3">{{$undangan->nama_panggilan_p ?? ''}} Dan {{$undangan->nama_panggilan_l ?? ''}}</h1>
      <p class="date h5 mb-4"> {{$date}} </p>
      <div class="countdown mb-5" id="countdown" aria-live="polite" data-target-date="{{$undangan->tanggal_penikahan ?? ''}}">
        <!-- diisi lewat JS -->
      </div>
      <div class="d-flex gap-2 justify-content-center">
        <a href="#mempelai" class="btn btn-primary px-4"><i class="bi bi-envelope-open-heart me-2"></i>Buka Undangan</a>
        <button class="btn btn-outline-light px-4" id="btnAddCalendar"><i class="bi bi-calendar2-plus me-2"></i>Tambah ke Kalender</button>
      </div>
    </div>
  </header>

  <!-- MEMPELAI -->
  <section id="mempelai" class="section bg-rose">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title display-6 reveal" data-reveal="zoom">Mempelai</h2>
        <p class="lead reveal" data-reveal>Dengan memohon rahmat dan ridho Allah SWT, kami bermaksud menyelenggarakan pernikahan kami.</p>
      </div>
      <div class="row g-4">
        <div class="col-md-6 reveal" data-reveal="left">
          <div class="soft-card p-4 h-100 text-center">
            <!-- <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=800&auto=format&fit=crop" alt="Foto mempelai wanita" class="rounded-circle shadow" width="140" height="140" style="object-fit:cover" loading="lazy"> -->
            <img src="/src/mempelai/{{$mempelai_wanita}}" alt="Foto mempelai wanita" class="rounded-circle shadow" width="140" height="140" style="object-fit:cover" loading="lazy">
            <h3 class="h4 mt-3">{{ $undangan->nama_lengkap_p ?? '' }}</h3>
            <p class="mb-1">Putri dari Bpk. {{ $undangan->nama_bpk_p ?? '' }} dan {{ $undangan->nama_ibu_p ?? '' }}</p>
            <div class="d-flex gap-3 justify-content-center">
              @if($undangan->instagramp != null) 
                <a href="https://www.instagram.com/{{ $undangan->instagramp }}/" class="link-dark"><i class="bi bi-instagram"></i></a> 
              @endif
              @if($undangan->facebookp != null) 
                <a href="https://www.facebook.com/{{ $undangan->facebookp }}/" class="link-dark"><i class="bi bi-facebook"></i></a> 
              @endif
            </div>
          </div>
        </div>
        <div class="col-md-6 reveal" data-reveal="right">
          <div class="soft-card p-4 h-100 text-center">
            <!-- <img src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?q=80&w=800&auto=format&fit=crop" alt="Foto mempelai pria" class="rounded-circle shadow" width="140" height="140" style="object-fit:cover" loading="lazy"> -->
            <img src="/src/mempelai/{{$mempelai_pria}}" alt="Foto mempelai pria" class="rounded-circle shadow" width="140" height="140" style="object-fit:cover" loading="lazy">
            <h3 class="h4 mt-3">{{ $undangan->nama_lengkap_l  ?? '' }}</h3>
            <p class="mb-1">Putra dari Bpk. {{ $undangan->nama_bpk_l ?? '' }} dan {{ $undangan->nama_ibu_l ?? '' }}</p>
            <div class="d-flex gap-3 justify-content-center">
              @if($undangan->instagraml != null) 
                <a href="https://www.instagram.com/{{ $undangan->instagraml }}/" class="link-dark"><i class="bi bi-instagram"></i></a> 
              @endif
              @if($undangan->facebookl != null) 
                <a href="https://www.facebook.com/{{ $undangan->facebookl }}/" class="link-dark"><i class="bi bi-facebook"></i></a> 
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ACARA -->
  <section id="acara" class="section">
    <div class="container">
      <div class="row justify-content-between align-items-center g-4">
        <div class="col-lg-6">
          <h2 class="section-title display-6 mb-3 reveal" data-reveal>Rangkaian Acara</h2>
          <p class="reveal" data-reveal>{{ $additional_data->events->intro ?? 'Dengan penuh kebahagiaan, kami mengundang Anda untuk hadir pada momen istimewa kami.'}}</p>
          <div class="timeline mt-4">
          @foreach($additional_data->events->event as $event)
            <div class="item reveal" data-reveal>
              <h6 class="mb-1">{{ $event->title }}</h6>
              <div class="text-secondary small">{{ \App\Helper\Helpers::gateDateWithDays($event->date) }} • {{ $event->time }}</div>
              <div>{{ $event->place }}</div>
            </div>
          @endforeach
          </div>
          <div class="d-flex gap-2 mt-4">
            <a class="btn btn-primary" href="#lokasi"><i class="bi bi-geo-alt me-2"></i>Lihat Lokasi</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- GALERI -->
  <section id="galeri" class="section bg-rose">
    <div class="container">
      <div class="text-center mb-4">
        <h2 class="section-title display-6 reveal" data-reveal="zoom">Galeri</h2>
        <p class="reveal" data-reveal>Beberapa momen kebersamaan kami.</p>
      </div>
      <div class="row g-3 gallery">
        <!-- <div class="col-6 col-md-4 g-col reveal" data-reveal><img src="https://images.unsplash.com/photo-1520854221256-17451cc331bf?q=80&w=900&auto=format&fit=crop" alt="Galeri 1" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-src="https://images.unsplash.com/photo-1520854221256-17451cc331bf?q=80&w=1600&auto=format&fit=crop" loading="lazy"></div> -->
          @foreach($galeris as $galeri)
          <div class="col-6 col-md-4 g-col reveal" data-reveal><img src="{{ $galeri }}" alt="Galeri 1" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-src="{{ $galeri }}" loading="lazy"></div>
          @endforeach
      </div>
    </div>
  </section>

  <!-- LOKASI -->
  <section id="lokasi" class="section">
    <div class="container">
      <div class="row g-4 align-items-start">
        <div class="col-lg-5">
          <h2 class="section-title display-6 mb-3 reveal" data-reveal>Lokasi</h2>
          <p class="reveal" data-reveal>{{ $undangan->alamat }}</p>
        </div>
        <div class="col-lg-7 reveal" data-reveal="right">
          <div class="ratio ratio-16x9 soft-card overflow-hidden">
            {!!$undangan->google_map!!}
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- HADIAH / AMPLOP DIGITAL -->
  <section id="hadiah" class="section">
    <div class="container">
      <div class="row g-4 align-items-start">
        <div class="col-lg-6">
          <h2 class="section-title display-6 mb-3 reveal" data-reveal>Amplop Digital</h2>
          <p class="reveal" data-reveal>Kehadiran dan doa Anda merupakan hadiah terbaik. Namun jika berkenan mengirimkan tanda kasih, berikut informasi rekening:</p>
          <div class="soft-card p-4 reveal" data-reveal>
          @foreach($additional_data->gifts as $gift)
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <div class="fw-semibold">{{ $gift->provider }} • a.n. {{ $gift->ownership }}</div>
                <div class="text-secondary small">No. Rek: <span id="rek{{ $gift->provider }}">{{ $gift->noRek }}</span></div>
              </div>
                <button class="btn btn-outline-primary btn-sm" data-copy="#rek{{ $gift->provider }}"><i class="bi bi-clipboard"></i> Salin</button>
            </div>
              <hr>
          @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- UCAPAN / GUESTBOOK -->
  <section id="ucapan" class="section bg-rose">
    <div class="container">
      <div class="text-center mb-4">
        <h2 class="section-title display-6 reveal" data-reveal="zoom">Buku Tamu</h2>
        <p class="reveal" data-reveal>Tinggalkan doa dan harapan terbaik untuk kami.</p>
      </div>
      <div class="row g-4">
        <div class="col-lg-6">
          <form method="POST" id="formUcapan" class="soft-card p-4 needs-validation reveal" data-reveal novalidate>
          @csrf
            <div class="row g-3">
            <input value="{{ $undangan->id }}" type="hidden" id="id_pesan" type="text" class="form-control" name="id_pesan" required>
              <div class="col-md-6">
                <label class="form-label">Nama</label>
                <input id="nama" type="text" class="form-control" name="nama" required>
                <div class="invalid-feedback">Nama wajib diisi.</div>
              </div>
              <div class="col-12">
                <label class="form-label">Ucapan</label>
                <textarea id="pesan" class="form-control" rows="3" name="pesan" required></textarea>
                <div class="invalid-feedback">Ucapan wajib diisi.</div>
              </div>
              <div class="col-12">
                <button id="sent-ucapan" class="btn btn-primary" type="submit"><i class="bi bi-chat-dots me-2"></i>Kirim Ucapan</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-6 reveal" data-reveal="right">
          <div id="listUcapan" class="soft-card p-4" style="height: 320px; overflow: scroll;">
              @if($pesans->count() <= 0 )
                            <h2>data tidak ada</h2>
              @endif
              <li class="list-group-item">Belum ada ucapan.</li>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="py-4 text-center">
    <div class="container d-flex flex-column align-items-center gap-2">
      <div class="small"> janjinikah.id <i class="bi bi-heart-fill text-danger"></i></div>
    </div>
  </footer>

  <!-- Back to top -->
  <button id="toTop" class="btn btn-primary rounded-circle p-2" aria-label="Kembali ke atas"><i class="bi bi-arrow-up"></i></button>

  <!-- Lightbox Modal -->
  <div class="modal fade" id="lightboxModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content bg-dark text-white border-0">
        <div class="modal-header border-0">
          <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-0">
          <img id="lightboxImage" src="" alt="Foto" class="w-100" />
        </div>
      </div>
    </div>
  </div>

  <!-- Toast Container -->
  <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1080">
    <div id="toastInfo" class="toast align-items-center text-bg-dark border-0" role="status" aria-live="polite" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body" id="toastMessage">Tersalin!</div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
  </div>