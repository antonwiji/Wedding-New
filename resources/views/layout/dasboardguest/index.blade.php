<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard Owner — Personal & Grup (WA tanpa nomor)</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    body{background:#fafafa}
    .card{border:1px solid rgba(0,0,0,.06)}
    .cursor-copy{cursor:copy}
    .mono{font-family:ui-monospace,SFMono-Regular,Menlo,Consolas,monospace}
    .muted{color:#6b7280}
  </style>
</head>
<body>
  <main class="container py-4">
    <h1 class="h4 mb-3">Daftar Kontak — Personal & Grup</h1>

    <div class="alert alert-light border d-flex align-items-center gap-3" role="alert">
      <i class="bi bi-info-circle"></i>
      <div>
        WA akan terbuka <strong>tanpa nomor</strong> (kamu pilih kontak sendiri). Link undangan dibangun dari
        <code class="mono">BASE_URL/SLUG/?to=Nama</code>. Untuk personal, bisa pakai pasangan (contoh: <code>Anton dan Partner</code>).
      </div>
    </div>

    <!-- Tabs -->
    <ul class="nav nav-tabs" id="inviteTabs" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="tab-personal" data-bs-toggle="tab" data-bs-target="#pane-personal" type="button" role="tab">Personal</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab-group" data-bs-toggle="tab" data-bs-target="#pane-group" type="button" role="tab">Grup</button>
      </li>
    </ul>

    <div class="tab-content pt-3">
      <!-- ===== PERSONAL ===== -->
      <div class="tab-pane fade show active" id="pane-personal" role="tabpanel">
        <div class="card mb-3">
          <div class="card-body">
            <div class="row g-2 align-items-end">
              <div class="col-md-5">
                <label class="form-label">Nama</label>
                <input id="p_name" class="form-control" placeholder="Nama tamu" />
              </div>
              <div class="col-md-5">
                <label class="form-label">Nama Pasangan (opsional)</label>
                <input id="p_partner" class="form-control" placeholder="Nama pasangan" />
              </div>
              <div class="col-md-2 d-grid d-md-flex gap-2">
                <button id="p_send" class="btn btn-success w-100"><i class="bi bi-send me-1"></i>Kirim</button>
                <button id="p_add" class="btn btn-dark w-100"><i class="bi bi-plus-circle me-1"></i>Tambah</button>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table align-middle mb-0">
                <thead class="table-light">
                  <tr>
                    <th style="width:56px">#</th>
                    <th>Nama</th>
                    <th>Link</th>
                    <th style="width:170px">Aksi</th>
                  </tr>
                </thead>
                <tbody id="p_tbody"></tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- ===== GROUP ===== -->
      <div class="tab-pane fade" id="pane-group" role="tabpanel">
        <div class="card mb-3">
          <div class="card-body">
            <div class="row g-2 align-items-end">
              <div class="col-md-10">
                <label class="form-label">Nama Grup</label>
                <input id="g_name" class="form-control" placeholder="Nama grup" />
              </div>
              <div class="col-md-2 d-grid d-md-flex gap-2">
                <button id="g_send" class="btn btn-success w-100"><i class="bi bi-send me-1"></i>Kirim</button>
                <button id="g_add" class="btn btn-dark w-100"><i class="bi bi-plus-circle me-1"></i>Tambah</button>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table align-middle mb-0">
                <thead class="table-light">
                  <tr>
                    <th style="width:56px">#</th>
                    <th>Nama Grup</th>
                    <th>Link</th>
                    <th style="width:170px">Aksi</th>
                  </tr>
                </thead>
                <tbody id="g_tbody"></tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Toast -->
  <div class="position-fixed bottom-0 end-0 p-3" style="z-index:1080">
    <div id="toast" class="toast text-bg-dark" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body" id="toastMsg">OK</div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // ======= KONFIGURASI =======
    const BASE_URL = 'https://janjinikah.id'; // ganti sesuai domainmu
    const SLUG     =  @json($slug);        // ganti sesuai slug undanganmu
    const LS_KEY   = 'owner_invite_tabs_v1';

    // Pesan WA (nama mempelai akan kamu ganti nanti di PHP Blade)
    const MSG_TEMPLATE = `Kepada Yth.
Bapak/Ibu/Saudara/i

Assalamualaikum Warahmatullahi Wabarakaatuh
Dengan memohon rahmat dan ridho Allah SWT, perkenankan kami mengundang Bapak/Ibu/Saudara/i untuk menghadiri acara pernikahan kami :

{{$undangan->nama_lengkap_p}}
dengan
{{$undangan->nama_lengkap_l}};

Untuk informasi detail mengenai acara, silahkan kunjungi link dibawah ini :

{url}

Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa restu.
Atas kehadiran dan doa restunya kami ucapkan terima kasih.
Wassalamualaikum Warahmatullahi Wabarakaatuh

Hormat kami,
{{$undangan->nama_panggilan_p}} & {{$undangan->nama_panggilan_l}}`;

    // ======= Util =======
    const $ = (sel, ctx=document) => ctx.querySelector(sel);
    const $$ = (sel, ctx=document) => [...ctx.querySelectorAll(sel)];
    const toast = new bootstrap.Toast($('#toast'));
    const showToast = (m) => { $('#toastMsg').textContent = m || 'OK'; toast.show(); };
    const escapeHtml = (s) => String(s).replace(/[&<>"']/g, c => ({"&":"&amp;","<":"&lt;",">":"&gt;","\"":"&quot;","'":"&#39;"}[c]));

    const state = () => {
      try{ return JSON.parse(localStorage.getItem(LS_KEY)) || { personal: [], group: [] }; }catch{ return { personal: [], group: [] }; }
    };
    const save = (s) => localStorage.setItem(LS_KEY, JSON.stringify(s));

    const sanitize = (s) => (s||'').split(' ').filter(Boolean).join(' ').trim();
    const buildToPersonal = (name, partner) => {
      const n = sanitize(name); 
      const p = sanitize(partner);
        
      return p ? `${n} dan ${p}` : `${n} dan Pasangan`;
    };
    const buildToGroup = (name) => sanitize(name);
    const buildUrl = (to) => {
      const cleanBase = BASE_URL.replace(/\/$/, '');
      return `${cleanBase}/${SLUG}?to=${encodeURIComponent(to)}`;
    };
    const waHref = (text) => `https://api.whatsapp.com/send/?text=${encodeURIComponent(text)}`;

    const msgForUrl = (url) => MSG_TEMPLATE.replace('{url}', url);

    // ======= RENDER =======
    function renderPersonal(){
      const s = state();
      const tbody = $('#p_tbody');
      if(!s.personal.length){
        tbody.innerHTML = '<tr><td colspan="4" class="text-center text-muted py-4">Belum ada tamu personal</td></tr>';
        return;
      }
      tbody.innerHTML = s.personal.map((g,i)=>{
        const to = buildToPersonal(g.name, g.partner);
        const url = buildUrl(to);
        return `
          <tr>
            <td>${i+1}</td>
            <td>${escapeHtml(g.name)}${g.partner?`<div class="small muted">dan ${escapeHtml(g.partner)}</div>`:''}</td>
            <td class="mono small"><span class="cursor-copy" data-copy="${escapeHtml(url)}" title="Klik untuk salin">${escapeHtml(url)}</span></td>
            <td>
              <div class="btn-group btn-group-sm" role="group">
                <a class="btn btn-success" target="_blank" rel="noopener" href="${waHref(msgForUrl(url))}"><i class="bi bi-whatsapp"></i> Kirim</a>
                <button class="btn btn-outline-danger" data-action="p_del" data-index="${i}" title="Hapus"><i class="bi bi-trash"></i></button>
              </div>
            </td>
          </tr>`;
      }).join('');
    }

    function renderGroup(){
      const s = state();
      const tbody = $('#g_tbody');
      if(!s.group.length){
        tbody.innerHTML = '<tr><td colspan="4" class="text-center text-muted py-4">Belum ada grup</td></tr>';
        return;
      }
      tbody.innerHTML = s.group.map((g,i)=>{
        const to = buildToGroup(g.name);
        const url = buildUrl(to);
        return `
          <tr>
            <td>${i+1}</td>
            <td>${escapeHtml(g.name)}</td>
            <td class="mono small"><span class="cursor-copy" data-copy="${escapeHtml(url)}" title="Klik untuk salin">${escapeHtml(url)}</span></td>
            <td>
              <div class="btn-group btn-group-sm" role="group">
                <a class="btn btn-success" target="_blank" rel="noopener" href="${waHref(msgForUrl(url))}"><i class="bi bi-whatsapp"></i> Kirim</a>
                <button class="btn btn-outline-danger" data-action="g_del" data-index="${i}" title="Hapus"><i class="bi bi-trash"></i></button>
              </div>
            </td>
          </tr>`;
      }).join('');
    }

    function renderAll(){ renderPersonal(); renderGroup(); }

    // ======= ACTIONS =======
    $('#p_send').addEventListener('click', ()=>{
      const name = sanitize($('#p_name').value); const partner = sanitize($('#p_partner').value);
      if(!name){ showToast('Nama wajib diisi'); return; }
      const to = buildToPersonal(name, partner); const url = buildUrl(to); const m = msgForUrl(url);
      window.open(waHref(m), '_blank');
      const s = state(); s.personal.push({name, partner}); save(s); renderPersonal();
      $('#p_name').value=''; $('#p_partner').value=''; showToast('Dikirim & ditambahkan');
    });

    $('#p_add').addEventListener('click', ()=>{
      const name = sanitize($('#p_name').value); const partner = sanitize($('#p_partner').value);
      if(!name){ showToast('Nama wajib diisi'); return; }
      const s = state(); s.personal.push({name, partner}); save(s); renderPersonal();
      $('#p_name').value=''; $('#p_partner').value=''; showToast('Tamu ditambahkan');
    });

    $('#g_send').addEventListener('click', ()=>{
      const name = sanitize($('#g_name').value);
      if(!name){ showToast('Nama grup wajib diisi'); return; }
        
      const to = buildToGroup(name); 
      const url = buildUrl(to); 
      const m = msgForUrl(url);
      window.open(waHref(m), '_blank');
      const s = state(); s.group.push({name}); save(s); renderGroup();
      $('#g_name').value=''; showToast('Dikirim & ditambahkan');
    });

    $('#g_add').addEventListener('click', ()=>{
      const name = sanitize($('#g_name').value);
      if(!name){ showToast('Nama grup wajib diisi'); return; }
      const s = state(); s.group.push({name}); save(s); renderGroup();
      $('#g_name').value=''; showToast('Grup ditambahkan');
    });

    // Delegated events (copy & delete)
    document.addEventListener('click', async (e)=>{
      const copyEl = e.target.closest('[data-copy]');
      if(copyEl){
        try{ await navigator.clipboard.writeText(copyEl.getAttribute('data-copy')); showToast('Link disalin'); }catch{ showToast('Gagal menyalin'); }
        return;
      }
      const delBtn = e.target.closest('[data-action]');
      if(delBtn){
        const action = delBtn.getAttribute('data-action');
        const idx = +delBtn.getAttribute('data-index'); if(isNaN(idx)) return;
        const s = state();
        if(action==='p_del'){ s.personal.splice(idx,1); save(s); renderPersonal(); }
        if(action==='g_del'){ s.group.splice(idx,1); save(s); renderGroup(); }
      }
    });
    
    renderAll();
  </script>
</body>
</html>
