@extends('layout.themes.modern.main')

@section('content')
<!-- NAVBAR -->
<nav id="navMain" class="navbar navbar-expand-lg fixed-top border-bottom d-none d-lg-block">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#beranda"><i class="bi bi-suit-heart-fill me-2 text-danger"></i>Rani & Dika</a>
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
          <li class="nav-item"><a class="nav-link" href="#rsvp">RSVP</a></li>
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
        <li class="nav-item"><a class="nav-link" href="#rsvp"><i class="bi bi-card-checklist"></i><span class="label">RSVP</span></a></li>
      </ul>
    </div>
  </nav>

  <!-- HERO -->
  <header id="beranda" class="hero d-flex align-items-center">
    <div class="inner container">
      <div class="tag mb-3">#DikaAyu</div>
      <p class="mb-1">Mengundang Anda ke pernikahan</p>
      <h1 class="names mb-3">Ayu Dan Dika</h1>
      <p class="date h5 mb-4"> 30 September 2026 • Jakarta</p>
      <div class="countdown mb-5" id="countdown" aria-live="polite" data-target-date="2027-09-30 00:00:00.000">
        <!-- diisi lewat JS -->
      </div>
      <div class="d-flex gap-2 justify-content-center">
        <a href="#acara" class="btn btn-primary px-4"><i class="bi bi-envelope-open-heart me-2"></i>Buka Undangan</a>
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
            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=800&auto=format&fit=crop" alt="Foto mempelai wanita" class="rounded-circle shadow" width="140" height="140" style="object-fit:cover" loading="lazy">
            <h3 class="h4 mt-3">Ayu Putri</h3>
            <p class="mb-1">Putri dari Bpk. Samsul dan Ibu. Sumarni</p>
            <div class="d-flex gap-3 justify-content-center">
              <a href="#" class="link-dark"><i class="bi bi-instagram"></i></a>
              <a href="#" class="link-dark"><i class="bi bi-tiktok"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 reveal" data-reveal="right">
          <div class="soft-card p-4 h-100 text-center">
            <img src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?q=80&w=800&auto=format&fit=crop" alt="Foto mempelai pria" class="rounded-circle shadow" width="140" height="140" style="object-fit:cover" loading="lazy">
            <h3 class="h4 mt-3">Dika Ahmad</h3>
            <p class="mb-1">Putra dari Bpk. Budi dan Ibu. Mariyam</p>
            <div class="d-flex gap-3 justify-content-center">
              <a href="#" class="link-dark"><i class="bi bi-instagram"></i></a>
              <a href="#" class="link-dark"><i class="bi bi-tiktok"></i></a>
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
          <p class="reveal" data-reveal>Dengan penuh kebahagiaan, kami mengundang Anda untuk hadir pada momen istimewa kami.</p>
          <div class="timeline mt-4">
            <div class="item reveal" data-reveal>
              <h6 class="mb-1">Akad Nikah</h6>
              <div class="text-secondary small">Sabtu, 14 Februari 2026 • 10.00 WIB</div>
              <div>Masjid Agung Jakarta</div>
            </div>
            <div class="item reveal" data-reveal>
              <h6 class="mb-1">Resepsi</h6>
              <div class="text-secondary small">Sabtu, 14 Februari 2026 • 12.00 – 15.00 WIB</div>
              <div>Gedung Serbaguna Nusantara</div>
            </div>
            <div class="item reveal" data-reveal>
              <h6 class="mb-1">After Party (Opsional)</h6>
              <div class="text-secondary small">Sabtu, 14 Februari 2026 • 18.30 WIB</div>
              <div>Rooftop Nusantara</div>
            </div>
          </div>
          <div class="d-flex gap-2 mt-4">
            <a class="btn btn-primary" href="#lokasi"><i class="bi bi-geo-alt me-2"></i>Lihat Lokasi</a>
            <a class="btn btn-outline-primary" href="#rsvp"><i class="bi bi-card-checklist me-2"></i>Konfirmasi Kehadiran</a>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="soft-card p-4 reveal" data-reveal="right">
            <h5 class="mb-3"><i class="bi bi-exclamation-circle me-2"></i>Informasi Tamu</h5>
            <ul class="mb-0">
              <li>Mohon hadir tepat waktu dan berpakaian sopan.</li>
              <li>Area parkir tersedia terbatas, pertimbangkan transportasi umum.</li>
              <li>Anak-anak diperbolehkan.</li>
            </ul>
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
        <div class="col-6 col-md-4 g-col reveal" data-reveal><img src="https://images.unsplash.com/photo-1520854221256-17451cc331bf?q=80&w=900&auto=format&fit=crop" alt="Galeri 1" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-src="https://images.unsplash.com/photo-1520854221256-17451cc331bf?q=80&w=1600&auto=format&fit=crop" loading="lazy"></div>
        <div class="col-6 col-md-4 g-col reveal" data-reveal><img src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?q=80&w=900&auto=format&fit=crop" alt="Galeri 2" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?q=80&w=1600&auto=format&fit=crop" loading="lazy"></div>
        <div class="col-6 col-md-4 g-col reveal" data-reveal><img src="https://images.unsplash.com/photo-1643199273520-fd981cd10d8b?q=80&w=900&auto=format&fit=crop" alt="Galeri 3" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-src="https://images.unsplash.com/photo-1643199273520-fd981cd10d8b?q=80&w=1600&auto=format&fit=crop" loading="lazy"></div>
        <div class="col-6 col-md-4 g-col reveal" data-reveal><img src="https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=900&auto=format&fit=crop" alt="Galeri 4" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-src="https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=1600&auto=format&fit=crop" loading="lazy"></div>
        <div class="col-6 col-md-4 g-col reveal" data-reveal><img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?q=80&w=900&auto=format&fit=crop" alt="Galeri 5" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?q=80&w=1600&auto=format&fit=crop" loading="lazy"></div>
        <div class="col-6 col-md-4 g-col reveal" data-reveal><img src="https://images.unsplash.com/photo-1460978812857-470ed1c77af0?q=80&w=900&auto=format&fit=crop" alt="Galeri 6" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-src="https://images.unsplash.com/photo-1460978812857-470ed1c77af0?q=80&w=1600&auto=format&fit=crop" loading="lazy"></div>
      </div>
    </div>
  </section>

  <!-- LOKASI -->
  <section id="lokasi" class="section">
    <div class="container">
      <div class="row g-4 align-items-start">
        <div class="col-lg-5">
          <h2 class="section-title display-6 mb-3 reveal" data-reveal>Lokasi</h2>
          <p class="reveal" data-reveal>Gedung Serbaguna Nusantara<br>Jl. Merdeka No. 123, Gambir, Jakarta Pusat</p>
          <div class="d-flex gap-2 reveal" data-reveal>
            <a class="btn btn-primary" target="_blank" rel="noopener" href="https://maps.google.com/?q=Monas,Jakarta"><i class="bi bi-geo-fill me-2"></i>Buka di Google Maps</a>
            <button class="btn btn-outline-primary" id="btnCopyAlamat" data-copy="Gedung Serbaguna Nusantara, Jl. Merdeka No. 123, Gambir, Jakarta Pusat"><i class="bi bi-clipboard me-2"></i>Salin Alamat</button>
          </div>
        </div>
        <div class="col-lg-7 reveal" data-reveal="right">
          <div class="ratio ratio-16x9 soft-card overflow-hidden">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.4421323803767!2d104.77179967447552!3d-2.9747266970013846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b766ac2d1812f%3A0xd72c149f95ba60d9!2sLorong%20Wiraguna%2C%20Kuto%20Batu%2C%20Kec.%20Ilir%20Tim.%20II%2C%20Kota%20Palembang%2C%20Sumatera%20Selatan!5e0!3m2!1sid!2sid!4v1759055563859!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- RSVP -->
  <section id="rsvp" class="section bg-rose">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-lg-6">
          <h2 class="section-title display-6 mb-3 reveal" data-reveal>Konfirmasi Kehadiran</h2>
          <p class="reveal" data-reveal>Mohon isi formulir berikut untuk membantu kami menyiapkan tempat terbaik untuk Anda.</p>
          <form id="formRSVP" class="soft-card p-4 needs-validation reveal" data-reveal novalidate>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" required>
                <div class="invalid-feedback">Nama wajib diisi.</div>
              </div>
              <div class="col-md-6">
                <label class="form-label">No. WhatsApp</label>
                <input type="tel" class="form-control" name="wa" placeholder="0812xxxxxxx" required pattern="[0-9+ ]{8,15}">
                <div class="invalid-feedback">Nomor WA tidak valid.</div>
              </div>
              <div class="col-md-6">
                <label class="form-label">Kehadiran</label>
                <select class="form-select" name="hadir" required>
                  <option value="" selected disabled>Pilih...</option>
                  <option>Hadir</option>
                  <option>Tidak Hadir</option>
                </select>
                <div class="invalid-feedback">Mohon pilih status kehadiran.</div>
              </div>
              <div class="col-md-6">
                <label class="form-label">Jumlah Tamu</label>
                <input type="number" class="form-control" name="jumlah" min="1" max="10" value="1" required>
                <div class="invalid-feedback">Mohon isi 1-10.</div>
              </div>
              <div class="col-12">
                <label class="form-label">Pesan/Ucapan</label>
                <textarea class="form-control" rows="3" name="pesan" placeholder="Doa dan harapan terbaik..." required></textarea>
                <div class="invalid-feedback">Mohon isi ucapan.</div>
              </div>
              <div class="col-12 d-flex gap-2">
                <button class="btn btn-primary" type="submit"><i class="bi bi-send me-2"></i>Kirim</button>
                <small class="text-secondary align-self-center">*Demo disimpan ke perangkat (localStorage)</small>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-6 reveal" data-reveal="right">
          <div class="soft-card p-4">
            <h5 class="mb-3">Daftar Kehadiran & Ucapan (Demo)</h5>
            <ul id="listRSVP" class="list-group list-group-flush small">
              <li class="list-group-item">Belum ada data. Jadilah yang pertama!</li>
            </ul>
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
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <div class="fw-semibold">BCA • a.n. Rani Putri</div>
                <div class="text-secondary small">No. Rek: <span id="rekBCA">1234567890</span></div>
              </div>
              <button class="btn btn-outline-primary btn-sm" data-copy="#rekBCA"><i class="bi bi-clipboard"></i> Salin</button>
            </div>
            <hr>
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <div class="fw-semibold">BRI • a.n. Dika Pratama</div>
                <div class="text-secondary small">No. Rek: <span id="rekBRI">9876543210</span></div>
              </div>
              <button class="btn btn-outline-primary btn-sm" data-copy="#rekBRI"><i class="bi bi-clipboard"></i> Salin</button>
            </div>
            <hr>
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <div class="fw-semibold">QRIS (E-Wallet)</div>
                <div class="text-secondary small">Scan QR di bawah ini</div>
              </div>
            </div>
            <div class="mt-3 text-center">
              <img src="https://api.qrserver.com/v1/create-qr-code/?size=240x240&data=RaniDika-QRIS" width="200" height="200" alt="QRIS" class="rounded border" loading="lazy"/>
            </div>
          </div>
        </div>
        <div class="col-lg-6 reveal" data-reveal="right">
          <div class="soft-card p-4">
            <h5 class="mb-3">Tips & Informasi</h5>
            <ul class="mb-0">
              <li>Setelah menyalin nomor rekening, Anda dapat mengirim bukti transfer via WhatsApp kepada pengantin.</li>
              <li>QRIS di atas hanya contoh; ganti dengan QR resmi Anda.</li>
              <li>Untuk verifikasi otomatis, integrasikan ke backend atau Google Form.</li>
            </ul>
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
          <form id="formUcapan" class="soft-card p-4 needs-validation reveal" data-reveal novalidate>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" required>
                <div class="invalid-feedback">Nama wajib diisi.</div>
              </div>
              <div class="col-md-6">
                <label class="form-label">Kota</label>
                <input type="text" class="form-control" name="kota" placeholder="Kota asal">
              </div>
              <div class="col-12">
                <label class="form-label">Ucapan</label>
                <textarea class="form-control" rows="3" name="ucapan" required></textarea>
                <div class="invalid-feedback">Ucapan wajib diisi.</div>
              </div>
              <div class="col-12">
                <button class="btn btn-primary" type="submit"><i class="bi bi-chat-dots me-2"></i>Kirim Ucapan</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-6 reveal" data-reveal="right">
          <div class="soft-card p-4">
            <ol id="listUcapan" class="list-group list-group-numbered list-group-flush small">
              <li class="list-group-item">Belum ada ucapan.</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="py-4 text-center">
    <div class="container d-flex flex-column align-items-center gap-2">
      <div class="small">© <span id="yearNow"></span> anton_wiji <i class="bi bi-heart-fill text-danger"></i></div>
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