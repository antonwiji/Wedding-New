<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Undangan Digital Pernikahan — Jadikan Moment Janji Nikah Jadi Spesial</title>
    <meta name="description" content="Jasa pembuatan undangan digital pernikahan berbasis web: cepat, elegan, murah, dan mudah dibagikan. Fitur RSVP, galeri, peta lokasi, musik, dan amplop digital." />
    <meta name="author" content="Janji Nikah" />
    <link rel="canonical" href="https://janjinikah.id/" />
    <link rel="alternate" hreflang="id-ID" href="https://janjinikah.id/" />


    <!-- Open Graph / Social -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://janjinikah.id/" />
    <meta property="og:title" content="Undangan Digital Pernikahan Termurah di Indoneisa" />
    <meta property="og:description" content="Jasa pembuatan undangan digital pernikahan yang elegan, cepat, dan mudah dibagikan. Fitur lengkap, harga terjangkau." />
    <meta property="og:image" content="https://janjinikah.id/" />

    <!-- Favicons -->
    <link rel="icon" href="src/singlepage/janji_nikah_logo.jpg" sizes="any" />
    <link rel="icon" href="/icon.svg" type="image/svg+xml" />
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Minimal, fast CSS (no framework) -->
    <style>
        :root{
            /* Gender-neutral rose + slate palette */
            --brand:#D16C7E; /* dusty rose */
            --brand-2:#7A546E; /* muted plum */
            --ink:#2E2A32; /* deep slate for text/links */
            --text:#2E2A32;
            --muted:#6B6F76;
            --bg:#FFFFFF; /* bersih & fresh */
            --surface:#FFFFFF;
            --ring: 0 10px 30px rgba(209,108,126,.18);
            --radius: 18px;
            --maxw: 1120px;
            --header-h: 64px;
        }
        *{box-sizing:border-box}
        html{scroll-behavior:smooth}
        body{margin:0;color:var(--text);font:16px/1.6 Inter,system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,Cantarell,Noto Sans,sans-serif;background:var(--bg)}
        img{max-width:100%;height:auto;display:block}
        a{color:var(--brand);text-decoration:none}
        a:hover{text-decoration:underline}
        .container{width:100%;max-width:var(--maxw);margin-inline:auto;padding:0 16px}
        .btn{display:inline-block;padding:12px 18px;border-radius:999px;font-weight:600;border:2px solid transparent;transition:.2s}
        .btn-primary{background:var(--brand);color:#fff;box-shadow:var(--ring)}
        .btn-primary:hover{filter:brightness(.95);transform:translateY(-1px)}
        .btn-outline{background:#fff;color:var(--brand);border-color:var(--brand)}
        .btn-outline:hover{background:var(--brand);color:#fff}
        .badge{display:inline-block;padding:.3rem .6rem;border-radius:999px;background:#F4E6EA;color:#6E3C4F;font-size:.8rem;font-weight:700;letter-spacing:.2px}

        /* Header & Navigation */
        header.site{position:sticky;top:0;z-index:50;background:rgba(255,255,255,.86);backdrop-filter:saturate(180%) blur(10px);border-bottom:1px solid #efe3ea}
        .nav{display:flex;align-items:center;justify-content:space-between;gap:12px;padding:12px 0;height:var(--header-h)}
        .brand{display:flex;align-items:center;gap:10px;font-family:"Playfair Display",serif}
        .brand img{width:50px;height:50px}
        .brand strong{font-weight:700;font-size:1.1rem}
        nav.links{display:flex;align-items:center;gap:16px}
        nav.links a{font-weight:600;color:var(--ink);padding:8px 6px;border-radius:10px}
        nav.links a:active{background:#F5E9EF}
        .nav .actions{display:flex;gap:10px;align-items:center}
        .menu-toggle{display:none;align-items:center;gap:8px;border:1px solid #efe3ea;background:#fff;border-radius:12px;padding:8px 12px;font-weight:700;color:var(--ink)}

        /* Hero */
        .hero{background:#fff}
        .hero-grid{display:grid;grid-template-columns:1.1fr .9fr;gap:28px;align-items:center}
        .hero h1{font:700 clamp(28px,6vw,46px)/1.15 "Playfair Display",serif;margin:10px 0 12px;color:#3B2E36}
        .hero p.lead{font-size:clamp(15px,3.9vw,18px);color:#514851;margin:0 0 18px}
        .hero .cta{display:flex;gap:12px;flex-wrap:wrap}
        .hero .card{background:var(--surface);border-radius:var(--radius);box-shadow:var(--ring);padding:18px}

        .logos{display:flex;gap:28px;flex-wrap:wrap;align-items:center;opacity:.85}
        .logos img{height:28px}
        section {
            margin-top: 2rem;
        }
        .section-title{font:700 clamp(22px,5vw,28px)/1.2 "Playfair Display",serif;margin:0 0 8px;color:#3B2E36}
        .section-sub{color:var(--muted);margin:0 0 24px}

        .grid-3{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
        .card{background:var(--surface);border:1px solid #efe3ea;border-radius:var(--radius);padding:18px}
        .card h3{margin:.2rem 0 .4rem;font-size:1.05rem}
        .muted{color:var(--muted)}

        .steps{counter-reset:st}

        .steps .step{
            position:relative;
            padding-left:54px
        }
        .steps .step::before{counter-increment:st;content:counter(st);position:absolute;left:-16px;top:-12px;width:38px;height:38px;border-radius:50%;display:grid;place-items:center;background:var(--brand);color:#fff;font-weight:700;box-shadow:var(--ring)}

        .pricing{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
        .price .head{display:flex;align-items:center;justify-content:space-between;margin-bottom:12px}
        .price h3{margin:0;font-size:1.1rem}
        .price .value{font-size:34px;font-weight:800}
        .price.reco{border:2px solid var(--brand);box-shadow:var(--ring)}

        .gallery{display:grid;grid-template-columns:repeat(3,1fr);gap:8px}
        .gallery figure{margin:0;border-radius:14px;overflow:hidden}

        .faq details{border:1px solid #efe3ea;border-radius:14px;padding:14px;background:#fff}
        .faq details+details{margin-top:10px}
        .faq summary{cursor:pointer;font-weight:700}

        .cta-banner{border-radius:20px;background:#fff;padding:26px;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:16px;border:1px solid #efe3ea}

        footer {
            padding:13px 0;
            color:#6C5F67;
            border-top:1px solid #efe3ea;
            background:#fff;
            margin-top: 14px;

        }

        /* Utilities */
        .center{text-align:center}
        .spacer{height:18px}

        /* Mobile-first adjustments */
        @media (max-width:980px){
            .hero-grid{grid-template-columns:1fr}
            .grid-3,.pricing,.gallery{grid-template-columns:1fr 1fr}
        }
        @media (max-width:860px){
            .menu-toggle{display:inline-flex}
            nav.links{position:fixed;left:0;right:0;top:var(--header-h);background:#fff;border-bottom:1px solid #efe3ea;display:none;flex-direction:column;gap:0;padding:10px 16px}
            nav.links a{padding:12px 10px}
            nav.links.open{display:flex}
            .nav .actions{display:none}
        }
        @media (max-width:640px){
            .container{padding:0 20px}
            .grid-3,.pricing,.gallery{grid-template-columns:1fr}
            .btn{width:100%;text-align:center}
            h1 {
                text-align:center;
            }
        }

        /* Mobile bottom CTA */
        .mobile-cta{position:fixed;left:0;right:0;bottom:0;background:rgba(255,255,255,.98);border-top:1px solid #efe3ea;backdrop-filter:saturate(180%) blur(6px);padding:10px;display:none;gap:10px;z-index:60}
        @media (max-width:640px){.mobile-cta{display:flex}}

        .icon {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size:28px;
            color:var(--brand);
            position: absolute;
            top:-20px;
            width:40px;height:40px;
            background-color: #FFFFFF;
            border-radius: 50%;
            border: 2px solid var(--brand);
        }

        .row>* {
            padding-right: 5px;
            padding-left: 2px;
            padding-top: 8px;
        }

        .template-card {
            width: 100%;
            height: auto;
            padding: 8px;
        }

        article p {
            text-align: center;
        }

        .carousel-item img {
            width: 100%;
        }

        /* Optional: alternate neutral themes (apply to body class) */
        /* .theme-sage{ --brand:#7BA27B; --brand-2:#556B56; --ring:0 10px 30px rgba(123,162,123,.18); --bg:#FFFFFF } */
        /* .theme-navy{ --brand:#4E6FD4; --brand-2:#374B82; --ring:0 10px 30px rgba(78,111,212,.18); --bg:#FFFFFF } */
    </style>

</head>
<body>
<header class="site">
    <div class="container nav" aria-label="Navigasi utama">
        <a href="#beranda" class="brand" aria-label="BRAND_NAME beranda">
            <img src="src/singlepage/janji_nikah_logo-remove.png" alt="janjinikah.id" loading="eager"  />
        </a>
        <button class="menu-toggle" aria-label="Buka menu" aria-controls="main-menu" aria-expanded="false">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M3 6h18M3 12h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
            <span>Menu</span>
        </button>
        <nav id="main-menu" class="links" aria-label="Tautan utama">
            <a class="link" href="#fitur">Fitur</a>
            <a class="link" href="#cara-kerja">Cara Kerja</a>
            <a class="link" href="#harga">Harga</a>
            <a class="link" href="#demo">Demo</a>
            <a class="link" href="#faq">FAQ</a>
        </nav>
        <div class="actions">
            <a class="btn btn-outline" href="#harga" aria-label="Lihat harga">Lihat Harga</a>
            <a class="btn btn-primary" href="https://wa.me/6285709005738?text=Halo%2C%20saya%20ingin%20membuat%20undangan%20digital" target="_blank" rel="noopener" aria-label="Chat WhatsApp">Chat WhatsApp</a>
        </div>
    </div>
</header>

<main id="beranda">
    <!-- HERO -->
    <section class="hero">
        <div class="container hero-grid">
            <div>
                <div class="d-flex justify-content-center">
                    <img src="src/singlepage/janji_nikah_logo-remove.png" alt="logo-janjinikah" width="150">
                </div>
                <h1>Undangan Digital Pernikahan yang Elegan, Cepat, dan Mudah Dibagikan</h1>
                <p class="lead">Promosikan momen spesial Anda dengan website undangan yang <strong>modern</strong>, dan <strong>ringan</strong>. Cukup <em>kirim tautan</em>, tamu bisa lihat detail acara, RSVP, dan simpan lokasi ke Google Maps.</p>
                <div class="cta">
                    <a class="btn btn-primary" href="#demo">Lihat Demo</a>
                </div>
                <div class="spacer"></div>
            </div>
            <aside class="card" aria-label="Sorotan fitur">
                <ul class="muted" style="margin:0;padding-left:18px">
                    <li>Desain premium, warna & font disesuaikan</li>
                    <li>RSVP & buku tamu (komentar/ucapan)</li>
                    <li>Lokasi & navigasi Google Maps</li>
                    <li>Galeri foto & video, musik latar</li>
                    <li>Amplop digital & nomor rekening</li>
                </ul>
            </aside>
        </div>
    </section>

    <!-- FITUR -->
    <section class="mt-4" id="fitur">
        <div class="container">
            <h2 class="section-title">Fitur Unggulan</h2>
            <p class="section-sub">Semua yang Anda butuhkan untuk undangan digital yang berkesan dan mudah diakses di berbagai perangkat.</p>
            <div class="grid-3 mt-5">
                <article class="card mt-3" style="display: flex; align-items: center;">
                    <i class="bi bi-phone icon"></i>
                    <h3>Mobile First &amp; Ringan</h3>
                    <p class="muted">Dimaksimalkan untuk smartphone. Loading cepat, gambar terkompresi, dan dukungan PWA opsional.</p>
                </article>
                <article class="card mt-3" style="display: flex; align-items: center;">
                    <i class="bi bi-journal-bookmark icon"></i>
                    <h3>RSVP &amp; Buku Tamu</h3>
                    <p class="muted">Kumpulkan konfirmasi kehadiran dan ucapan tamu secara real-time, ekspor ke Excel bila diperlukan.</p>
                </article>
                <article class="card mt-3" style="display: flex; align-items: center;">
                    <i class="bi bi-geo-alt icon"></i>
                    <h3>Peta &amp; Navigasi</h3>
                    <p class="muted">Tautkan ke Google Maps dan arahkan tamu ke lokasi acara dalam satu ketukan.</p>
                </article>
                <article class="card mt-3" style="display: flex; align-items: center;">
                    <i class="bi bi-pip icon"></i>
                    <h3>Galeri &amp; Musik</h3>
                    <p class="muted">Tampilkan kisah cinta Anda lewat foto, video, dan musik latar yang menyentuh.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- CARA KERJA -->
    <section id="cara-kerja">
        <div class="container">
            <h2 class="section-title">Cara Kerja</h2>
            <p class="section-sub">Dari data Anda menjadi undangan digital siap sebar.</p>
            <div class="grid-3 steps">
                <div class="card step">
                    <h3>Kirim Data</h3>
                    <p class="muted">Nama pasangan, tanggal, lokasi, foto, dan preferensi tema/warna.</p>
                </div>
                <div class="card step">
                    <h3>Desain &amp; Review</h3>
                    <p class="muted">Kami buatkan versi awal & Anda bisa minta revisi minor hingga pas.</p>
                </div>
                <div class="card step">
                    <h3>Go Live!</h3>
                    <p class="muted">Undangan online aktif. Bagikan link via WhatsApp, atau IG</p>
                </div>
            </div>
        </div>
    </section>
    <!-- DEMO / GALERI -->
    <section id="demo">
        <div class="container">
            <h2 class="section-title">Tamplate Undangan</h2>
            <p class="section-sub">Contoh tampilan undangan digital dari beberapa tema.</p>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="card" style="padding: 0px">
                        <div id="carouselExampleIndicators" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>

                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="src/singlepage/modern.png">
                                </div>
                                <div class="carousel-item">
                                    <img src="src/singlepage/modern2.png">
                                </div>
                                <div class="carousel-item">
                                    <img src="src/singlepage/modern3.png">
                                </div>
                                <div class="carousel-item">
                                    <img src="src/singlepage/modern4.png">
                                </div>
                                <div class="carousel-item">
                                    <img src="src/singlepage/modern5.png">
                                </div>
                                <div class="carousel-item">
                                    <img src="src/singlepage/modern6.png">
                                </div>
                                <div class="carousel-item">
                                    <img src="src/singlepage/modern7.png">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="template-card">
                            <h3 class="mt-3">Modern Tamplate</h3>
                            <p class="muted mb-3">Clean, tipografi tegas, cocok untuk konsep modern-minimal.</p>
                            <div class="cta m-1"><a class="btn btn-primary" href="https://janjinikah.id/demo/modern" target="_blank" rel="noopener">Lihat Tema</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="harga">
        <div class="container">
            <h2 class="section-title">Paket & Harga</h2>
            <div class="pricing">
                <div class="card price reco">
                        <div class="head"><h3>Premium</h3><span class="badge">Paling Populer</span></div>
                    <div style="position: relative">
                            <div class="value">
                                <p>Rp50K</p>
                            </div>
                            <div style="position: absolute; top: -4px; left: 110px">
                                <span style="text-decoration: line-through; color:#888; font-size: 20px">Rp150K</span>
                                <div class="badge">Diskon(-66%)</div>
                            </div>
                    </div>
                    <ul class="muted" style="margin:0 0 12px;padding-left:18px">
                        <li>RSVP & Buku Tamu</li>
                        <li>Google Map</li>
                        <li>Amplop Digital</li>
                        <li>Galeri foto/video & Musik</li>
                        <li>Kustom warna & font</li>
                        <li>Dan Feature Unggulan Lainnya</li>
                    </ul>
                    <a class="btn btn-primary" href="https://wa.me/6285709005738?text=Halo%2C%20saya%20ingin%20membuat%20undangan%20digital" target="_blank" rel="noopener">Pesan Paket</a>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONI / CTA -->
    <section>
        <div class="container">
            <div class="cta-banner">
                <div>
                    <h3 style="margin:0 0 6px">Siap Buat Undangan Digital?</h3>
                    <p class="muted" style="margin:0">Kami bantu wujudkan undangan yang berkesan, cepat, dan mudah dibagikan.</p>
                </div>
                <a class="btn btn-primary" href="https://wa.me/6285709005738?text=Halo%2C%20saya%20ingin%20membuat%20undangan%20digital" target="_blank" rel="noopener">Chat Sekarang</a>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq">
        <div class="container">
            <h2 class="section-title">Pertanyaan Umum</h2>
            <div class="faq">
                <details>
                    <summary>Apakah bisa revisi?</summary>
                    <p class="muted">Bisa revisi minor (warna, teks, foto) sesuai paket. Revisi mayor/desain ulang termasuk paket Custom.</p>
                </details>
                <details>
                    <summary>Apakah bisa ganti jadwal/lokasi?</summary>
                    <p class="muted">Bisa kapan saja sebelum acara. Perubahan setelah live akan disinkronkan real-time.</p>
                </details>
                <details>
                    <summary>Bagaimana pembayaran?</summary>
                    <p class="muted">Transfer bank/e-wallet langsung Go Live</p>
                </details>
            </div>
        </div>
    </section>
</main>

<!-- CTA tetap untuk mobile -->


<footer>
    <div class="container" style="display:flex;flex-wrap:wrap;align-items:center;justify-content: center;gap:10px">
        <div style="text-align: center">&copy; <span id="y"></span> janjinikah.id</div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

<script>
    // Tahun otomatis & toggle menu mobile
    document.getElementById('y').textContent = new Date().getFullYear();
    (function(){
        const btn = document.querySelector('.menu-toggle');
        const menu = document.getElementById('main-menu');
        if(!btn || !menu) return;
        btn.addEventListener('click', function(){
            const isOpen = menu.classList.toggle('open');
            btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });
        // Tutup menu saat klik link
        menu.querySelectorAll('a').forEach(a=>a.addEventListener('click', ()=>{
            menu.classList.remove('open');
            btn.setAttribute('aria-expanded','false');
        }));
    })();
</script>

</body>
</html>
