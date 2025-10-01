<!doctype html>
<html lang="en">
  <head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Template website undangan pernikahan Indonesia berbasis Bootstrap 5. Animasi saat scroll, RSVP, galeri, peta lokasi, dan amplop digital." />
  <meta name="theme-color" content="#b5838d" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <title>Dika & Ayu</title>
  <style>
    :root{
      --primary:#b5838d; /* rosewood pastel */
      --primary-2:#e5989b;
      --text:#3b3b3b;
      --bg:#fffaf7;
    }
    * { overscroll-behavior-x: none; }
    html{scroll-behavior:smooth}
    body{font-family:Inter,system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,Cantarell,Noto Sans,sans-serif;background:var(--bg);color:var(--text)}
    h1,h2,h3,.display-1,.display-2,.display-3{font-family:"Playfair Display",Georgia,serif}

    /* === Anti “bablas ke kanan” saat awal render === */
    html, body { max-width: 100%; overflow-x: hidden; }

    /* Pastikan setiap section tidak mengizinkan overflow horizontal dari transform */
    header, section, footer { overflow-x: clip; }

    /* Di layar kecil, animasi cukup dari bawah (vertikal) agar tidak melebar ke samping */
    @media (max-width: 576px){
    .reveal[data-reveal="left"],
    .reveal[data-reveal="right"] { transform: translateY(24px); }
    }


    /* Navbar */
    .navbar{backdrop-filter:saturate(150%) blur(8px); background:rgba(255,255,255,.7)}
    .navbar .nav-link{font-weight:600}
    .navbar .nav-link.active{color:var(--primary)!important}

    /* Hero */
    .hero{min-height:100dvh; position:relative; display:grid; place-items:center; text-align:center; color:#fff; padding:96px 16px 140px;}
    .hero::before{content:""; position:absolute; inset:0; background:linear-gradient(180deg, rgba(0,0,0,.55), rgba(0,0,0,.35)), url('https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?q=80&w=2000&auto=format&fit=crop') center/cover no-repeat;}
    .hero > .inner{position:relative; z-index:1}
    .hero .tag{display:inline-block; padding:.25rem .6rem; border-radius:999px; background:rgba(255,255,255,.15); border:1px solid rgba(255,255,255,.25)}
    .hero .names{font-size:clamp(1.8rem,8vw,4rem)}
    .hero .date{font-weight:600; letter-spacing:.02em}

    /* Sections */
    section.section{padding:80px 0}
    .section .section-title{color:var(--primary); font-weight:700}

    /* Cards */
    .soft-card{background:#fff; border:1px solid #f1e9e9; border-radius:1.25rem; box-shadow:0 10px 30px rgba(181,131,141,.08)}

    /* Reveal on scroll */
    .reveal{opacity:0; transform:translateY(24px); transition:transform .8s cubic-bezier(.2,.65,.2,1), opacity .8s}
    .reveal[data-reveal="left"]{transform:translateX(-28px)}
    .reveal[data-reveal="right"]{transform:translateX(28px)}
    .reveal[data-reveal="zoom"]{transform:scale(.96)}
    .reveal.reveal-visible{opacity:1; transform:translate(0,0) scale(1)}

    /* Countdown */
    .countdown{display:flex; gap:.90rem; justify-content:center; flex-wrap:wrap}
    .countdown .box{min-width:100px; padding:.75rem .5rem; border-radius:.75rem; background:rgba(255,255,255,.9); color:#222}
    .countdown .box .num{font-size:1.5rem; font-weight:700}
    .countdown .box .lbl{font-size:.8rem; text-transform:uppercase; letter-spacing:.08em; opacity:.8}

    /* Timeline */
    .timeline{position:relative; padding-left:1.5rem}
    .timeline::before{content:""; position:absolute; left:.5rem; top:.25rem; bottom:.25rem; width:2px; background:linear-gradient(180deg,var(--primary),var(--primary-2))}
    .timeline .item{position:relative; margin-bottom:1rem}
    .timeline .item::before{content:""; position:absolute; left:-1.3rem; top:.35rem; width:.75rem; height:.75rem; background:var(--primary); border:2px solid #fff; border-radius:50%; box-shadow:0 0 0 2px var(--primary)}

    /* Gallery */
    .gallery img{border-radius:1rem; width:100%; height:280px; object-fit:cover}
    .gallery .g-col{transition:transform .2s}
    .gallery .g-col:hover{transform:translateY(-3px)}

    /* Buttons */
    .btn-primary{--bs-btn-bg:var(--primary); --bs-btn-border-color:var(--primary); --bs-btn-hover-bg:#a16d79; --bs-btn-hover-border-color:#a16d79}
    .btn-outline-primary{--bs-btn-color:var(--primary); --bs-btn-hover-bg:var(--primary); --bs-btn-hover-border-color:var(--primary)}

    /* Footer */
    footer{background:#fff; border-top:1px solid #f1e9e9}

    /* Back to top */
    #toTop{position:fixed; right:16px; bottom:16px; z-index:1040; display:none}

    /* Small helpers */
    .bg-rose{background:linear-gradient(180deg,#fff,#fff2f0)}
    .accent{color:var(--primary)}
    .divider-wave{display:block; line-height:0}

    @media (max-width: 576px){
      .hero .names{font-size:2.2rem}
    }
  /* Bottom Nav (mobile) */
    .bottom-nav{background:rgba(255,255,255,.95); border-top:1px solid #eee; backdrop-filter:saturate(150%) blur(8px); padding:.25rem .5rem calc(env(safe-area-inset-bottom,0) + .25rem)}
    .bottom-nav .nav-link{color:#6b6b6b; font-weight:600; padding:.35rem .25rem; display:flex; flex-direction:column; align-items:center; gap:2px}
    .bottom-nav .nav-link .bi{font-size:1.2rem; line-height:1}
    .bottom-nav .nav-link .label{font-size:.72rem; line-height:1}
    .bottom-nav .nav-link.active{color:var(--primary)}
    /* Prevent overlap content under bottom nav */
    @media (max-width: 991.98px){ body{padding-bottom:72px} #toTop{bottom:80px} }
    @media (min-width: 992px){ .hero{ padding: 120px 0 80px; } }


    </style>
  </head>
  
  <body data-bs-spy="scroll" data-bs-target="#navMain" data-bs-offset="80" tabindex="0">

  @yield("content")

    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Scroll reveal
    const io = new IntersectionObserver((entries)=>{
      entries.forEach(e=>{
        if(e.isIntersecting){
          e.target.classList.add('reveal-visible');
          io.unobserve(e.target);
        }
      })
    },{threshold:0.12, rootMargin:'0px 0px -8% 0px'});
    document.querySelectorAll('.reveal').forEach(el=>io.observe(el));

    // Scrollspy refresh (in case content height changes)
    const scrollSpy = new bootstrap.ScrollSpy(document.body, { target: '#navMain', offset: 80 });

    // Back to top
    const toTop = document.getElementById('toTop');
    window.addEventListener('scroll', ()=>{
      toTop.style.display = window.scrollY > 600 ? 'block' : 'none';
    });
    toTop.addEventListener('click', ()=> window.scrollTo({top:0, behavior:'smooth'}));

    // Countdown
    function pad(n){return String(n).padStart(2,'0')}
    function renderCountdown(){
      const el = document.getElementById('countdown');
      const target = new Date(el.dataset.targetDate);
      const now = new Date();
      const diff = Math.max(0, target - now);
      const d = Math.floor(diff/86400000);
      const h = Math.floor(diff%86400000/3600000);
      const m = Math.floor(diff%3600000/60000);
      const s = Math.floor(diff%60000/1000);
      el.innerHTML = `
        <div class="box"><div class="num">${pad(d)}</div><div class="lbl">Hari</div></div>
        <div class="box"><div class="num">${pad(h)}</div><div class="lbl">Jam</div></div>
        <div class="box"><div class="num">${pad(m)}</div><div class="lbl">Menit</div></div>
        <div class="box"><div class="num">${pad(s)}</div><div class="lbl">Detik</div></div>`;
    }
    renderCountdown();
    setInterval(renderCountdown, 1000);

    // Lightbox from gallery
    const lbImg = document.getElementById('lightboxImage');
    document.querySelectorAll('#galeri img[data-bs-target="#lightboxModal"]').forEach(img=>{
      img.addEventListener('click',()=>{ lbImg.src = img.getAttribute('data-src') || img.src; });
    });

    // Copy helpers (for text or from element)
    const toast = new bootstrap.Toast(document.getElementById('toastInfo'));
    function showToast(msg='Tindakan berhasil!'){
      document.getElementById('toastMessage').textContent = msg;
      toast.show();
    }
    function copyText(text){
      navigator.clipboard.writeText(text).then(()=>showToast('Tersalin!')).catch(()=>showToast('Gagal menyalin'))
    }
    document.getElementById('btnCopyAlamat').addEventListener('click', (e)=>{
      copyText(e.currentTarget.dataset.copy);
    });
    document.querySelectorAll('[data-copy]').forEach(btn=>{
      btn.addEventListener('click', ()=>{
        const val = btn.dataset.copy.startsWith('#') ? document.querySelector(btn.dataset.copy).textContent.trim() : btn.dataset.copy;
        copyText(val);
      });
    });

    // RSVP (demo: localStorage)
    const formRSVP = document.getElementById('formRSVP');
    const listRSVP = document.getElementById('listRSVP');
    function loadRSVP(){
      const data = JSON.parse(localStorage.getItem('rsvp')||'[]');
      listRSVP.innerHTML = data.length? '' : '<li class="list-group-item">Belum ada data. Jadilah yang pertama!</li>';
      data.forEach(d=>{
        const li = document.createElement('li');
        li.className = 'list-group-item';
        li.innerHTML = `<strong>${d.nama}</strong> • <span class="text-secondary">${d.hadir}</span> • ${d.jumlah} org<br><span class="text-secondary">${d.wa}</span><br>${d.pesan}`;
        listRSVP.appendChild(li);
      })
    }
    loadRSVP();
    formRSVP.addEventListener('submit', (ev)=>{
      ev.preventDefault();
      formRSVP.classList.add('was-validated');
      if(!formRSVP.checkValidity()) return;
      const fd = new FormData(formRSVP);
      const obj = Object.fromEntries(fd.entries());
      const arr = JSON.parse(localStorage.getItem('rsvp')||'[]');
      arr.unshift(obj);
      localStorage.setItem('rsvp', JSON.stringify(arr));
      formRSVP.reset();
      formRSVP.classList.remove('was-validated');
      showToast('RSVP terkirim (tersimpan di perangkat)');
      loadRSVP();
    });

    // Guestbook (demo: localStorage)
    const formUcapan = document.getElementById('formUcapan');
    const listUcapan = document.getElementById('listUcapan');
    function loadUcapan(){
      const data = JSON.parse(localStorage.getItem('ucapan')||'[]');
      listUcapan.innerHTML = data.length? '' : '<li class="list-group-item">Belum ada ucapan.</li>';
      data.forEach(d=>{
        const li = document.createElement('li');
        li.className = 'list-group-item';
        const kota = d.kota? `, ${d.kota}`:'';
        li.innerHTML = `<strong>${d.nama}</strong>${kota}<br>${d.ucapan}`;
        listUcapan.appendChild(li);
      })
    }
    loadUcapan();
    formUcapan.addEventListener('submit', (ev)=>{
      ev.preventDefault();
      formUcapan.classList.add('was-validated');
      if(!formUcapan.checkValidity()) return;
      const fd = new FormData(formUcapan);
      const obj = Object.fromEntries(fd.entries());
      const arr = JSON.parse(localStorage.getItem('ucapan')||'[]');
      arr.unshift(obj);
      localStorage.setItem('ucapan', JSON.stringify(arr));
      formUcapan.reset();
      formUcapan.classList.remove('was-validated');
      showToast('Ucapan terkirim (tersimpan di perangkat)');
      loadUcapan();
    });

    // Add to calendar (.ics)
    document.getElementById('btnAddCalendar').addEventListener('click', ()=>{
      // ambil target date dari countdown
      const dt = new Date(document.getElementById('countdown').dataset.targetDate);
      const dtEnd = new Date(dt.getTime() + 2*60*60*1000); // +2 jam
      function toICS(d){
        // format: YYYYMMDDTHHMMSS
        const pad = n=>String(n).padStart(2,'0');
        return `${d.getUTCFullYear()}${pad(d.getUTCMonth()+1)}${pad(d.getUTCDate())}T${pad(d.getUTCHours())}${pad(d.getUTCMinutes())}${pad(d.getUTCSeconds())}Z`;
      }
      const ics = `BEGIN:VCALENDAR\nVERSION:2.0\nPRODID:-//Wedding Apps//ID\nBEGIN:VEVENT\nUID:${crypto.randomUUID()}\nDTSTAMP:${toICS(new Date())}\nDTSTART:${toICS(dt)}\nDTEND:${toICS(dtEnd)}\nSUMMARY:Rani & Dika — Resepsi\nDESCRIPTION:Undangan pernikahan Rani & Dika\nLOCATION:Gedung Serbaguna Nusantara, Jakarta\nEND:VEVENT\nEND:VCALENDAR`;
      const blob = new Blob([ics], {type:'text/calendar'});
      const url = URL.createObjectURL(blob);
      const a = document.createElement('a'); a.href = url; a.download = 'Undangan-RaniDika.ics'; a.click();
      URL.revokeObjectURL(url);
    });

    // Year footer
    document.getElementById('yearNow').textContent = new Date().getFullYear();
    // Bottom nav active state
    const bottomNavLinks = Array.from(document.querySelectorAll('#navBottom .nav-link'));
    if(bottomNavLinks.length){
      function updateBottomActive(){
        const scrollY = window.scrollY + 120;
        let idx = 0;
        bottomNavLinks.forEach((a,i)=>{
          const sec = document.querySelector(a.getAttribute('href'));
          if(sec && scrollY >= sec.offsetTop - 140){ idx = i; }
        });
        bottomNavLinks.forEach(a=>a.classList.remove('active'));
        bottomNavLinks[idx]?.classList.add('active');
      }
      window.addEventListener('scroll', updateBottomActive, {passive:true});
      window.addEventListener('load', updateBottomActive);
      updateBottomActive();
    }
  </script>
    
</body>
</html>
