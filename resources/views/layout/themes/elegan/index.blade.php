<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta name="theme-color" content="#f8fafc" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  @php
    $heroImage = $undangan->image_hero
        ? asset('src/hero/' . $undangan->image_hero)
        : asset('src/hero/hero1.jpg');
  @endphp
  <title>{{ $undangan->nama_panggilan_p }} & {{ $undangan->nama_panggilan_l }} — Undangan Pernikahan</title>
  <meta name="description" content="Kami mengundang Bapak/Ibu/Saudara/i untuk hadir di hari bahagia kami pada {{ $date }}.">
  <meta property="og:title" content="The Wedding of {{ $undangan->nama_panggilan_p }} & {{ $undangan->nama_panggilan_l }}">
  <meta property="og:description" content="Kami mengundang Bapak/Ibu/Saudara/i untuk hadir di hari bahagia kami pada {{ $date }}.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ $heroImage }}">
  <meta property="og:image:secure_url" content="{{ $heroImage }}">
  <meta property="og:image:width" content="533">
  <meta property="og:image:height" content="533">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="The Wedding of {{ $undangan->nama_panggilan_p }} & {{ $undangan->nama_panggilan_l }}">
  <meta name="twitter:description" content="Kami mengundang Bapak/Ibu/Saudara/i untuk hadir di hari bahagia kami pada {{ $date }}.">
  <meta name="twitter:image" content="{{ $heroImage }}">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300..700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <style>
    :root{
      --bg: #f8fafc;
      --card: #ffffff;
      --text: #0f172a;
      --muted: #64748b;
      --primary: #AE8F7A;
      --border: #e2e8f0;
      --radius-lg: 20px;
      --radius: 14px;
      --shadow: 0 8px 30px rgba(15,23,42,.08);
    }

    /* Reset ringan */
    *, *::before, *::after { 
        padding: 0px;
        margin: 0px;
        box-sizing: border-box; 
    }
    html, body { height: 100%; }
    body {
      margin: 0;
      font-family: system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial, "Noto Sans", "Apple Color Emoji", "Segoe UI Emoji";
      background: var(--bg);
      color: var(--text);
      line-height: 1.6;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    h2 {
      font-size: 22px;
      font-weight: 400;
      font-family: 'Great Vibes', Sans-serif;
      color: #AE8F7A;
    }

    img, svg, video { max-width: 100%;}

    /* Wrapper: memberi ruang di kiri/kanan ketika layar > 480px */
    .wrapper {
      min-height: 100svh; /* stabil di mobile */
      display: flex;
      justify-content: center;
      background: var(--bg);
    }

    /* Lock scroll waktu cover masih aktif */
    body.lock-scroll {
      overflow: hidden;
    }

    /* Cover pembuka undangan */
    .intro-cover {
      position: fixed;
      inset: 0;
      z-index: 9999;
      background-color: #f8fafc;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      opacity: 1;
      visibility: visible;
      transition: opacity .7s ease, visibility .7s ease;
    }

    /* Saat sudah dibuka (disembunyikan) */
    .intro-cover.hide {
      opacity: 0;
      visibility: hidden;
      pointer-events: none;
    }

    /* App utama: lebar maksimal 480px */
    .app {
      width: 100%;
      max-width: 480px;
      background: var(--card);
      box-shadow: var(--shadow);
      overflow: clip;
      display: flex;
      flex-direction: column;
      min-height: 100%;
    }

    /* Header sticky */
    .app-header {
      position: sticky;
      top: 0;
      z-index: 10;
      background: rgba(255,255,255,.8);
      backdrop-filter: saturate(180%) blur(10px);
      border-bottom: 1px solid var(--border);
      padding: calc(12px + env(safe-area-inset-top)) 16px 12px;
      display: flex;
      gap: 12px;
      align-items: center;
    }
    .app-header .title {
      font-size: clamp(16px, 4vw, 18px);
      font-weight: 700;
      margin: 0;
      letter-spacing: .2px;
    }
    .icon-btn {
      border: 1px solid var(--border);
      background: #fff;
      border-radius: 12px;
      padding: 8px 10px;
      font-size: 14px;
      line-height: 1;
    }

    /* Konten */
    main {
      flex: 1;
      display: grid;
      background:
        radial-gradient(60% 40% at 100% 0%, rgba(225,17,72,.06) 0%, rgba(225,17,72,0) 60%) no-repeat,
        radial-gradient(60% 40% at 0% 100%, rgba(2,132,199,.06) 0%, rgba(2,132,199,0) 60%) no-repeat,
        #fff;
    }

    .card {
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 14px;
      background: #fff;
    }
    .card h3 {
      margin: 0 0 6px;
      font-size: 16px;
    }
    .muted { color: var(--muted); }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      width: 100%;
      height: 44px;
      border-radius: 999px;
      border: 1px solid transparent;
      background: var(--primary);
      color: #fff;
      font-weight: 600;
      text-decoration: none;
      transition: transform .05s ease;
    }
    .btn:active { transform: translateY(1px); }

    .btn-ucapan {
      background: #198754;
    }

    /* Footer (safe area aware) */
    footer {
      padding: 12px 16px calc(12px + env(safe-area-inset-bottom));
      border-top: 1px solid var(--border);
      background: #fff;
      font-size: 12px;
      color: var(--muted);
      text-align: center;
    }

    /* Opsional: sembunyikan atau beri info jika layar > 480px */
    @media (min-width: 481px) {
      .desktop-hint {
        display: block;
        text-align: center;
        font-size: 12px;
        color: var(--muted);
        padding: 8px 0 0;
      }
    }
    @media (max-width: 480px) {
      .desktop-hint { display: none; }
    }

    .flow-box {
        position: relative;
        width: 100%;
        height: auto;
        min-height: 580px;
        background-color: rgb(230, 230, 230);
        z-index: 1;
    } 
    
    .flow-grup {
        width: 180px;
        height: 250px;
        position: absolute;
        top: -4px;
        right: -10px;
        overflow: hidden;
        z-index: 1;
    }

    .flow-grup-bottom {
        width: 180px;
        height: 250px;
        position: absolute;
        bottom: -4px;
        right: -10px;
        overflow: hidden;
        z-index: 1;
    }

    .flow-grup img {
        position: absolute;
        top: 0;
        right: 0px;
    }

    .flow-grup-bottom img {
        position: absolute;
        top: 0;
        right: 0px;
    }

    .animation-r img {
        animation: keyFrameDaunR 3s infinite linear alternate;
        transform-origin: top;
    }

    .animation-l img {
        animation: keyFrameDaunR 3s infinite linear alternate;
        transform-origin: top;
    }

    .animation-prayer-flowers img {
        animation: keyFramePrayer 2s infinite linear alternate;
        transform-origin: center;
    }

    @keyframes keyFrameDaunR {
      0% { 
        transform: rotate(0deg); 
      }
      100% { 
        transform: rotate(-10deg); 
      }
    }

    @keyframes keyFramePrayer {
      0% { transform: rotate(20deg); }
      100% { transform: rotate(40deg); }
    }

    .hero {
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      background-image: url("https://hi.punakawandigital.net/wp-content/uploads/2025/08/oke-6-2-1-2-2-scaled-1.png");
    }

    .hero-cover {
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      background:
      linear-gradient(
        180deg,
        rgba(254, 252, 250, 0.80) 0%,
        rgba(246, 240, 233, 0.75) 50%,
        rgba(236, 225, 214, 0.70) 100%
      ),
      url('{{ asset("src/hero/" . ($undangan->image_hero ?? "hero1.jpg")) }}') center/cover no-repeat;
      color: #4b5563; /* abu-abu gelap biar teks tetap kebaca */
    }

    .sub-hero {
      display: flex;
      flex-direction: column;
      width: 300px;
      height: 100vh;
      min-height: 400px;
      text-align: center;
      align-items: center;
      justify-content: center;
    }

    .main-prayer {
      width: 100%;
      height: auto;
      background-color: #AE8F7A;
      position: relative;
      z-index: 99;
    }

    .prayer {
      padding: 23px;
    }

    .prayer p{
      font-family:'Work Sans', sans-serif; 
      font-size: 12px;
      color: #ffffff;
      text-align: center;
      font-weight: 500;
    }

    .main-mempelai {
      width: 100%;
      height: auto;
      background-image: url("https://hi.punakawandigital.net/wp-content/uploads/2025/08/oke-6-2-1-2-2-scaled-1.png");
      background-position: bottom center;
      background-size: cover;
    }

    .mempelai {
      text-align: center;
      padding: 90px 18px;
    }

    .font-work-sans {
      font-family:'Work Sans', sans-serif; 
    }

    .color-alamat {
      color: #7a7a7a;
    }

    .font-small-weight {
      font-weight: 500;
    }

    .font-great-vibes {
      font-family:'Great Vibes', Sans-serif;
    }

    .mempelai p{
      font-family:'Work Sans', sans-serif; 
      font-size: 13px;
      color: #586472;
    }

    .font-name {
      font-size: 32px !important;
      font-family: 'Great Vibes', Sans-serif !important;
      font-weight: 400;
      color: #AE8F7A !important;
    }

    .parent-name p {
      margin-bottom: 0px !important;
    }

    .social-media {
      display: flex;
      color: #AE8F7A; 
      gap: 14px;
      justify-content: center;
      font-size: 21px;
    }

    .main-address {
      width: 100%;
      height: auto;
      background-color: #AE8F7A;
      padding: 22px;
      text-align: center;
      padding-bottom: 74px;
    }

    .downtime-box {
      border: 1px solid #ffffff;
      border-radius: 10px;
      width: 72px;
      height: auto;
      padding: 8px;
      margin-top: 14px;
    }

    .sub-downtime {
      display: flex;
      flex-direction: column;
    }

    .sub-downtime p {
      margin-bottom: 0px;
      font-family:'Work Sans', sans-serif;
      font-weight: 600;
      color: #ffffff;
      font-size: 16px;
    }

    .divider {
      width: 70%;
      height: 1px;
      border-radius: 20px;
      background-color: #AE8F7A;
    }

    .section-akad {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
    }

    .main-galeri {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: auto;
      flex-direction: column;
      background-image: url(https://hi.punakawandigital.net/wp-content/uploads/2025/08/oke-6-2-1-2-2-scaled-1.png);
      background-position: bottom center;
      background-size: cover;
      padding: 110px 0px;
    }

    .content-galeri {
      display: flex;
      justify-content: center;
      width: 90%;
      height: auto;
    }

    /* Gallery */
    .gallery img{border-radius:1rem; width:100%; height:280px; object-fit:cover}
    .gallery .g-col{transition:transform .2s}
    .gallery .g-col:hover{transform:translateY(-3px)}

    @media (max-width: 576px){
      .reveal[data-reveal="left"],
      .reveal[data-reveal="right"] { transform: translateY(24px); }
    }

    /* Reveal on scroll */
    .reveal{
      opacity:0;
      transform:translateY(24px);
      transition:transform 1.5s cubic-bezier(.2,.65,.2,1), opacity 1.5s;
    }
    .reveal[data-reveal="left"]{transform:translateX(-28px)}
    .reveal[data-reveal="right"]{transform:translateX(28px)}
    .reveal[data-reveal="zoom"]{transform:scale(.96)}
    .reveal.reveal-visible{
      opacity:1;
      transform:translate(0,0) scale(1);
    }

    .amplop-digital {
      width: 100%;
      height: auto;
    }

    .main-amplop-digital {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 14px;
      margin-bottom: 160px;
    }

    .card-amplop {
      position: relative;
      width: 80%;
      height: 168px;
      border-radius: 20px;
      border: 3px solid #ffffff;
      background-image: url("https://hi.punakawandigital.net/wp-content/uploads/2025/08/bg-bank-1-1.webp");
      background-size: cover;
      background-position: right bottom;
      box-shadow: 2px 1px 5px rgb(130 130 130);
      padding: 10px;
    }

    .card-amplop p {
      font-family: "Jura", sans-serif;
      font-size: 15px;
      color: #54595F;
      font-weight: 600;
      letter-spacing: 2px;
      margin: 0px 0px 2px;
    }

    .logo-bank {
      display: flex;
      justify-content: flex-end;
      margin: 8px;
    }

    .button-copy {
      position: absolute;
      right: 10px;
      bottom: -23px;
    }

    .main-buku-tamu{
      width: 100%;
      height: auto;
      background-color: #AE8F7A;
      padding: 22px;
      padding-bottom: 50px;
    }

    .main-buku-tamu p{
      font-family: 'Work Sans', sans-serif;
      color: #ffffff;
    }

    .main-footer {
      width: 100%;
      height: auto;
      background-color: #AE8F7A;
      padding: 22px;
      padding-bottom: 50px;
      display: flex;
      align-items: center;
      flex-direction: column;
    }

    .main-footer a{
      color: #0f172a;
      text-decoration: none;
    }

    .soft-card{
      padding: 10px;
      margin: 5px;
      background:#fff; 
      border:1px solid #f1e9e9; 
      border-radius:1.25rem; 
      box-shadow:0 10px 30px rgba(181,131,141,.08);
    }

    .google-map {
      width: 100%;
      height: 340px;
      margin-bottom: 120px;
      border-radius: 10px;
    }

  </style>
</head>
<body>
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

  <div class="wrapper">
    <div class="app" role="application">
      <main id="mainContent">
      <audio
          id="bgMusic"
          src="{{ asset('audio/' . ($undangan->music ?? 'default.mp3')) }}"
          preload="auto"
          loop
        ></audio>

    <section id="coverInvitation" class="intro-depan intro-cover">
    <div class="flow-box" style="min-height:100vh;">
      <div class="flow-grup animation-r">
        <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-04-e1722431813465-1.webp">
        <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-05-e1722432163480-1.webp" style="right: 12px; top: 20px;">
        <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-03-e1722432073807-1.webp" style="right: 52px;">
        <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-02-e1722431575817-1.webp">
        <img width="50px" src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-01-1-e1722429995810-1.webp" style="top: 5px;">
      </div>

      <div style="left: -10px; transform: scaleX(-1);" class="flow-grup animation-r">
        <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-04-e1722431813465-1.webp">
        <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-05-e1722432163480-1.webp" style="right: 12px; top: 20px;">
        <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-03-e1722432073807-1.webp" style="right: 52px;">
        <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-02-e1722431575817-1.webp">
        <img width="50px" src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-01-1-e1722429995810-1.webp" style="top: 5px;">
      </div>

      <div style="left: -10px; transform: scale(-1);" class="flow-grup-bottom animation-r">
        <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-04-e1722431813465-1.webp">
        <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-05-e1722432163480-1.webp" style="right: 12px; top: 20px;">
        <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-03-e1722432073807-1.webp" style="right: 52px;">
        <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-02-e1722431575817-1.webp">
        <img width="50px" src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-01-1-e1722429995810-1.webp" style="top: 5px;">
      </div>

      <div style="right: 0px; transform: scaleY(-1);" class="flow-grup-bottom animation-r">
        <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-04-e1722431813465-1.webp">
        <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-05-e1722432163480-1.webp" style="right: 12px; top: 20px;">
        <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-03-e1722432073807-1.webp" style="right: 52px;">
        <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-02-e1722431575817-1.webp">
        <img width="50px" src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-01-1-e1722429995810-1.webp" style="top: 5px;">
      </div>

      <div class="hero-cover">
        <div class="sub-hero">
          <p style="font-family:'Work Sans', sans-serif; font-size: 17px; font-weight: 600; letter-spacing: 0.6px; text-transform: uppercase;">The Wedding Of</p>
          <div class="mt-3">
            <img src="/src/hero/{{ $undangan->image_hero }}" alt="mempelai" class="rounded-circle shadow" width="200" height="200" style="object-fit:cover" loading="lazy">
          </div>
          <p class="mt-3" style="font-family: 'Great Vibes', Sans-serif; font-weight: 500; font-size: 34px;">
            {{ $undangan->nama_panggilan_p }} Dan {{ $undangan->nama_panggilan_l }}
          </p>
          <p style="font-family:'Work Sans', sans-serif; font-size: 13px; font-weight: 400; text-transform: uppercase;">
            We Invite You to celebrate our wedding
          </p>
          <h2 class="mt-2" style="font-family: 'Great Vibes', Sans-serif; font-weight: 500; font-size: 26px; color:#4b5563">
            {{ $to ?? 'Bapak/Ibu/Saudara/i' }}
          </h2>
          <p style="font-family:'Work Sans', sans-serif; font-size: 13px; font-weight: 600; letter-spacing: 0.6px;">
            {{ $date }}
          </p>

          <!-- TOMBOL BUKA UNDANGAN -->
          <button class="btn btn-danger mt-3" id="btnOpenInvitation">
            Buka Undangan
          </button>
        </div>
      </div>
    </div>
  </section>

        <!-- INTRO / HERO -->
        <section class="intro-depan reveal" data-reveal="zoom">
          <div class="flow-box">
            <div class="flow-grup animation-r">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-04-e1722431813465-1.webp">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-05-e1722432163480-1.webp" style="right: 12px; top: 20px;">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-03-e1722432073807-1.webp" style="right: 52px;">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-02-e1722431575817-1.webp">
              <img width="50px" src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-01-1-e1722429995810-1.webp" style="top: 5px;">
            </div>
            <div style="left: -10px; transform: scaleX(-1);" class="flow-grup animation-r">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-04-e1722431813465-1.webp">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-05-e1722432163480-1.webp" style="right: 12px; top: 20px;">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-03-e1722432073807-1.webp" style="right: 52px;">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-02-e1722431575817-1.webp">
              <img width="50px" src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-01-1-e1722429995810-1.webp" style="top: 5px;">
            </div>
            <div style="left: -10px; transform: scale(-1);" class="flow-grup-bottom animation-r">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-04-e1722431813465-1.webp">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-05-e1722432163480-1.webp" style="right: 12px; top: 20px;">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-03-e1722432073807-1.webp" style="right: 52px;">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-02-e1722431575817-1.webp">
              <img width="50px" src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-01-1-e1722429995810-1.webp" style="top: 5px;">
            </div>
            <div style="right: 0px; transform: scaleY(-1);" class="flow-grup-bottom animation-r">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-04-e1722431813465-1.webp">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-05-e1722432163480-1.webp" style="right: 12px; top: 20px;">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-03-e1722432073807-1.webp" style="right: 52px;">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-02-e1722431575817-1.webp">
              <img width="50px" src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-01-1-e1722429995810-1.webp" style="top: 5px;">
            </div>

            <div class="hero">
              <div class="sub-hero">
                <p style="font-family:'Work Sans', sans-serif; font-size: 17px; font-weight: 600; letter-spacing: 0.6px; text-transform: uppercase;">The Wedding Of</p>
                <div class="mt-3">
                  <img src="/src/hero/{{ $undangan->image_hero }}" alt="mempelai" class="rounded-circle shadow" width="200" height="200" style="object-fit:cover" loading="lazy">
                </div>
                <p class="mt-3" style=" font-family: 'Great Vibes', Sans-serif; font-weight: 500; font-size: 34px;">{{ $undangan->nama_panggilan_p }} Dan {{ $undangan->nama_panggilan_l }}</p>
                <p style="font-family:'Work Sans', sans-serif; font-size: 13px; font-weight: 400; text-transform: uppercase;">We Invite You to celebrate our wedding</p>
                <p style="font-family:'Work Sans', sans-serif; font-size: 13px; font-weight: 600; letter-spacing: 0.6px;">{{ $date }}</p>
                <button class="btn btn-danger mt-2">Save The Date</button>
              </div>
            </div>
          </div>
        </section>

        <!-- PRAYER -->
        <section class="prayer-section">
          <div class="main-prayer reveal" data-reveal="zoom">
            <div class="prayer animation-prayer-flowers">
              <div style="width: auto;" class="img-flowers d-flex justify-content-center">
                <img width="20%" height="auto" loading="lazy" decoding="async" src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/TEMA-02.png">
              </div>
              <p><i>“Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.”</i></p>
              <p>Qs. Ar-Rum : 21</p>
            </div>
          </div>
        </section>

        <!-- MEMPELAI ATAS -->
        <div class="main-mempelai reveal" >
          <div class="mempelai">
            <h2>Assalamu'alaikum Wr. Wb.</h2>
            <p class="mt-4">Tanpa mengurangi rasa hormat, kami mengundang Bapak/Ibu/Saudara/i serta kerabat sekalian untuk menghadiri acara pernikahan kami:</p>
            <div class="reveal" data-reveal="left">
              <img src="/src/mempelai/{{$mempelai_pria}}" alt="Foto mempelai wanita" class="rounded-circle shadow mt-5" width="200" height="200" style="object-fit:cover" loading="lazy">
              <p class="font-name mt-4">{{ $undangan->nama_lengkap_l  ?? '' }}</p>
              <div class="parent-name">
                <p>Putra dari Bapak {{ $undangan->nama_bpk_l ?? '' }}</p>
                <p>& {{ $undangan->nama_ibu_l ?? '' }}</p>
              </div>
              <div class="social-media">
                @if($undangan->instagramp != null) 
                  <a href="https://www.instagram.com/{{ $undangan->instagramp }}/" class="link-dark"><i class="bi bi-instagram"></i></a> 
                @endif
                @if($undangan->facebookp != null) 
                  <a href="https://www.facebook.com/{{ $undangan->facebookp }}/" class="link-dark"><i class="bi bi-facebook"></i></a> 
                @endif
              </div>
            </div>
            <h2 class="m-5">&</h2>
            <div class="reveal" data-reveal="right">
                <img src="/src/mempelai/{{$mempelai_wanita}}" alt="Foto mempelai wanita" class="rounded-circle shadow mt-5" width="200" height="200" style="object-fit:cover" loading="lazy">
                <p class="font-name mt-4">{{ $undangan->nama_lengkap_p ?? '' }}</p>
                <div class="parent-name">
                  <p>Putra dari Bapak {{ $undangan->nama_bpk_p ?? '' }}</p>
                  <p>& {{ $undangan->nama_ibu_p ?? '' }}</p>
                </div>
                <div class="social-media">
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

        <!-- SAVE THE DATE + EVENT -->
        <section>
          <div style="position:relative">
            <svg style="position:absolute; top: 2px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#AE8F7A" fill-opacity="1" d="M0,128L48,154.7C96,181,192,235,288,229.3C384,224,480,160,576,149.3C672,139,768,181,864,192C960,203,1056,181,1152,186.7C1248,192,1344,224,1392,240L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
            <svg style="position:absolute; top:22px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#AE8F7A" fill-opacity="0.3" d="M0,128L48,122.7C96,117,192,107,288,101.3C384,96,480,96,576,117.3C672,139,768,181,864,186.7C960,192,1056,160,1152,128C1248,96,1344,64,1392,48L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#AE8F7A" fill-opacity="0.6" d="M0,128L48,154.7C96,181,192,235,288,261.3C384,288,480,288,576,245.3C672,203,768,117,864,106.7C960,96,1056,160,1152,192C1248,224,1344,224,1392,224L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

            <div class="main-address reveal" data-reveal="zoom">
              <p style="color: #ffffff !important;" class="font-name">Save The Date</p>

              <div class="countdown mb-5" id="countdown" aria-live="polite" data-target-date="{{$undangan->tanggal_penikahan ?? ''}}">
                <!-- diisi lewat JS -->
              </div>

              <div class="flow-box mt-4" style="background-color: #f4f4f4; border-radius: 5px;">
                @foreach($additional_data->events->event as $event)
                  <div class="section-akad reveal" data-reveal="zoom">
                    <p class="font-name mt-2">
                      {{ $event->title }}
                    </p>
                    <p class="font-work-sans color-alamat font-small-weight">
                      {{ \App\Helper\Helpers::gateDateWithDays($event->date) }}
                    </p>
                    <p class="font-work-sans color-alamat">
                      Pukul : {{ $event->time }}
                    </p>
                    <p class="font-work-sans color-alamat">
                      {{ $event->place }}
                    </p>
                    <div class="divider mt-5"></div>
                  </div>
                @endforeach
                @if($undangan->google_map != null)
                  <div class="soft-card">
                    <iframe class="google-map" src="{{ $undangan->google_map }}" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                @endif
                <div style="left: -10px; transform: scale(-1);" class="flow-grup-bottom animation-r">
                  <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-04-e1722431813465-1.webp">
                  <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-05-e1722432163480-1.webp" style="right: 12px; top: 20px;">
                  <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-03-e1722432073807-1.webp" style="right: 52px;">
                  <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-02-e1722431575817-1.webp">
                  <img width="50px" src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-01-1-e1722429995810-1.webp" style="top: 5px;">
                </div>

                <div style="right: 0px; transform: scaleY(-1);" class="flow-grup-bottom animation-r">
                  <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-04-e1722431813465-1.webp">
                  <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-05-e1722432163480-1.webp" style="right: 12px; top: 20px;">
                  <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-03-e1722432073807-1.webp" style="right: 52px;">
                  <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-02-e1722431575817-1.webp">
                  <img width="50px" src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-01-1-e1722429995810-1.webp" style="top: 5px;">
                </div>

              </div>
            </div>
          </div>
        </section>

        <!-- GALERI -->
        <section class="galeri reveal" data-reveal="zoom">
          <div class="flow-box">
            <div class="flow-grup animation-r">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-04-e1722431813465-1.webp">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-05-e1722432163480-1.webp" style="right: 12px; top: 20px;">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-03-e1722432073807-1.webp" style="right: 52px;">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-02-e1722431575817-1.webp">
              <img width="50px" src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-01-1-e1722429995810-1.webp" style="top: 5px;">
            </div>
            <div style="left: -10px; transform: scaleX(-1);" class="flow-grup animation-r">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-04-e1722431813465-1.webp">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-05-e1722432163480-1.webp" style="right: 12px; top: 20px;">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-03-e1722432073807-1.webp" style="right: 52px;">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-02-e1722431575817-1.webp">
              <img width="50px" src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-01-1-e1722429995810-1.webp" style="top: 5px;">
            </div>
            <div style="left: -10px; transform: scale(-1);" class="flow-grup-bottom animation-r">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-04-e1722431813465-1.webp">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-05-e1722432163480-1.webp" style="right: 12px; top: 20px;">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-03-e1722432073807-1.webp" style="right: 52px;">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-02-e1722431575817-1.webp">
              <img width="50px" src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-01-1-e1722429995810-1.webp" style="top: 5px;">
            </div>
            <div style="right: 0px; transform: scaleY(-1);" class="flow-grup-bottom animation-r">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-04-e1722431813465-1.webp">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-05-e1722432163480-1.webp" style="right: 12px; top: 20px;">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-03-e1722432073807-1.webp" style="right: 52px;">
              <img src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-02-e1722431575817-1.webp">
              <img width="50px" src="https://hi.punakawandigital.net/wp-content/uploads/2025/08/Tema-02-Bunga-01-1-e1722429995810-1.webp" style="top: 5px;">
            </div>

            <div class="main-galeri reveal" data-reveal="zoom">
              @if($galeris != null)
                <p class="font-name">
                  Our Galeri
                </p>
                <div class="content-galeri">
                  <section id="galeri" class="section bg-rose">
                    <div class="row g-3 gallery">
                      @foreach($galeris as $galeri)
                        <div class="col-6 col-md-4 g-col reveal" data-reveal="zoom">
                          <img src="{{ $galeri }}" alt="Galeri" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-src="{{ $galeri }}" loading="lazy">
                        </div>
                      @endforeach
                    </div>
                  </section>
                </div>
              @endif

              <!-- AMPLOP DIGITAL -->
              <section class="amplop-digital mt-5 reveal" data-reveal="right">
                <div class="main-amplop-digital">
                  <p class="font-name">
                    Amplop Digital
                  </p>
                  @foreach($additional_data->gifts as $gift)
                    <div class="card-amplop mt-4 reveal" data-reveal="zoom">
                      <div class="logo-bank">
                        <img width="70" src="/src/themes/elegan/bank/{{ $gift->provider }}.png" alt="{{ $gift->provider }}">
                      </div>
                      <p style="text-transform: uppercase;">{{ $gift->provider }}</p>
                      <span id="rek{{ $gift->provider }}">{{ $gift->noRek }}</span>
                      <p>{{ $gift->ownership }}</p>
                      <div class="button-copy">
                        <button data-copy="#rek{{ $gift->provider }}" class="btn btn-success" style="width: 110px;"> Copy </button>
                      </div>
                    </div>
                  @endforeach
                </div>
              </section>

            </div>
          </div>
        </section>

        <!-- BUKU TAMU -->
        <section id="ucapan" class="section bg-rose reveal" data-reveal="zoom">
          <div class="container main-buku-tamu reveal" data-reveal="zoom">
            <div class="text-center mb-4">
              <h2 class="section-title display-6 reveal" data-reveal="zoom">Buku Tamu</h2>
              <p class="reveal" data-reveal>Tinggalkan doa dan harapan terbaik untuk kami.</p>
            </div>
            <div class="row g-4">
              <div class="col-lg-12">
                <form method="POST" id="formUcapan" class="needs-validation reveal" data-reveal novalidate>
                  @csrf
                  <div class="row g-3">
                    <input value="{{ $undangan->id }}" type="hidden" id="id_pesan" class="form-control" name="id_pesan" required>
                    <div class="col-md-6">
                      <p class="form-label">Nama</p>
                      <input id="nama" type="text" class="form-control" name="nama" required>
                      <div class="invalid-feedback">Nama wajib diisi.</div>
                    </div>
                    <div class="col-12">
                      <p class="form-label">Ucapan</p>
                      <textarea id="pesan" class="form-control" rows="3" name="pesan" required></textarea>
                      <div class="invalid-feedback">Ucapan wajib diisi.</div>
                    </div>
                    <div class="col-12">
                      <button id="sent-ucapan" class="btn btn-ucapan" type="submit"><i class="bi bi-chat-dots me-2"></i>Kirim Ucapan</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-lg-12 reveal" data-reveal="right">
                <div id="listUcapan" class="p-4 font-work-sans color-alamat font-small-weight" style="max-height: 300px; height: 320px; overflow: scroll; background: #f0f0f0; border-radius: 20px;">
                  @if($pesans->count() <= 0 )
                    <h2>data tidak ada</h2>
                  @endif
                  <li class="list-group-item">Belum ada ucapan.</li>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- MEMPELAI BAWAH -->
        <div class="main-mempelai reveal" data-reveal="left">
          <div class="mempelai">
            <h2 class="mt-4">Kehadiran dan doa restu Anda adalah hadiah terindah bagi kami di hari yang penuh bahagia ini.</h2>
            <img src="/src/hero/{{ $undangan->image_hero }}" alt="Foto mempelai wanita" class="rounded-circle shadow mt-5" width="200" height="200" style="object-fit:cover" loading="lazy">
          </div>
        </div>

        <!-- FOOTER -->
        <section class="d-flex justify-content-center reveal" data-reveal="zoom">
          <div class="container main-footer">
            <a href="https://janjinikah.id">@janjinikah.id</a>
            <span>
              <i class="bi bi-instagram"></i>
            </span>
          </div>
        </section>

      </main>
    </div>
  </div>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
    $(document).ready(function() {

      fetchdata($('#id_pesan').val());

      $(document).on('click', '#sent-ucapan', function(e){
        e.preventDefault();

        let data = {
          'id_pesan' : $('#id_pesan').val(),
          'nama' : $('#nama').val(),
          'pesan' : $('#pesan').val(),
        }

        let urlslug = document.URL;
        const slug = urlslug.split('/');

        $.ajax({
          type : 'POST',
          url  : slug[3],
          data : data,
          success: function(respon){
            if(respon.status == 400){
              alert("Error mengirim Pesan")
            }else{
              fetchdata(data['id_pesan']);
              $('#nama').val('')
              $('#pesan').val('')
            }
          }
        });
      });

      function fetchdata(id){
        let urlslug = document.URL;
        const slug = urlslug.split('/');

        $.ajax({
          type     : 'GET',
          url      : id+'/show',
          dataType : 'json',
          success  : function(respon){
            $('#listUcapan').html('');
            if(respon?.data?.length == 0)
              $('#listUcapan').append(`<h2 style="text-align: center">Belum Ada Pesan</h2>`)
            else
              $.each(respon.data, function(key, item){
                $('#listUcapan').append(`<li class="list-group-item">${item.nama} : ${item.pesan}</li><hr/>`)
              });
          }
        })
      }

    });

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  </script>

  <script>
    // Lightbox from gallery
    const lbImg = document.getElementById('lightboxImage');
    document.querySelectorAll('#galeri img[data-bs-target="#lightboxModal"]').forEach(img => {
      img.addEventListener('click', () => { 
        console.log('datas ini masuk');
        lbImg.src = img.getAttribute('data-src') || img.src; 
        console.log(lbImg.src);
      });
    });

    // Reveal on scroll: fade in & fade out
    const io = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('reveal-visible');
        } else {
          entry.target.classList.remove('reveal-visible');
        }
      });
    }, {
      threshold: 0.12,
      rootMargin: '0px 0px -1% 0px'
    });

    document.querySelectorAll('.reveal').forEach(el => io.observe(el));
  </script>

  <script>
    // Countdown
    function pad(n){
      return String(n).padStart(2,'0')
    }
    function renderCountdown(){
      const el = document.getElementById('countdown');
      if(!el || !el.dataset.targetDate) return;

      const target = new Date(el.dataset.targetDate);
      const now    = new Date();
      const diff   = Math.max(0, target - now);

      const d = Math.floor(diff/86400000);
      const h = Math.floor(diff%86400000/3600000);
      const m = Math.floor(diff%3600000/60000);
      const s = Math.floor(diff%60000/1000);

      el.innerHTML = `
        <div style="display: flex; flex-direction: row; gap: 11px; justify-content: center;">
          <div class="downtime-box">
            <div class="sub-downtime">
              <p>${pad(d)}</p>
              <p>Hari</p>
            </div>
          </div>
          <div class="downtime-box">
            <div class="sub-downtime">
              <p>${pad(h)}</p>
              <p>Jam</p>
            </div>
          </div>
          <div class="downtime-box"> 
            <div class="sub-downtime">
              <p>${pad(m)}</p>
              <p>Menit</p>
            </div>
          </div>
          <div class="downtime-box">
            <div class="sub-downtime">
              <p>${pad(s)}</p>
              <p>Detik</p>
            </div>
          </div>
        </div>`;
    }
    renderCountdown();
    setInterval(renderCountdown, 1000);

    function copyText(text){
      navigator.clipboard.writeText(text)
    }

    document.querySelectorAll('[data-copy]').forEach(btn=>{
      btn.addEventListener('click', ()=>{
        const val = btn.dataset.copy.startsWith('#') ? document.querySelector(btn.dataset.copy).textContent.trim() : btn.dataset.copy;
        console.log("hit data")
        copyText(val)
      });
    });
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
    const cover   = document.getElementById('coverInvitation');
    const btnOpen = document.getElementById('btnOpenInvitation');
    const main    = document.getElementById('mainContent');
    const music   = document.getElementById('bgMusic');

    // Saat pertama kali load, kunci scroll
    document.body.classList.add('lock-scroll');

    if (btnOpen) {
      btnOpen.addEventListener('click', function () {
        // Hilangkan cover dengan fade out
        cover.classList.add('hide');

        // Buka scroll halaman
        document.body.classList.remove('lock-scroll');

        // Play musik (karena sudah ada user interaction, aman dari blok autoplay browser)
        if (music) {
          music
            .play()
            .catch(err => {
              console.log('Gagal memutar musik:', err);
            });
        }

        // Optional: scroll halus ke konten utama
        if (main) {
          main.scrollIntoView({ behavior: 'smooth' });
        }
      });
    }
  });
  
  </script>
</body>
</html>
