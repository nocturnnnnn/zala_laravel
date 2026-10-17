@include('layouts.header', ['title' => 'Pengantar & Get Started • Laravel Blade Template'])
<div class="container">
    <div style="display: flex; flex-direction: column; gap: 2.5rem;">

        <!-- Header Hero -->
        <div class="glass-card" style="position: relative; overflow: hidden;">
            <div style="max-width: 780px;">
                <div class="tag-pill" style="margin-bottom: 1.25rem;">
                    🚀 Panduan Singkat • Get Started
                </div>

                <h1 style="font-size: clamp(2rem, 4vw, 2.8rem); font-weight: 800; color: var(--text-heading); line-height: 1.25; margin-bottom: 1rem; letter-spacing: -0.02em;">
                    Pengantar <span class="gradient-text">Laravel Blade Engine</span>
                </h1>

                <p style="font-size: 1.05rem; color: var(--text-body); line-height: 1.7; margin-bottom: 1.75rem;">
                    Blade adalah templating engine bawaan Laravel yang elegan, cepat, dan intuitif. Blade tidak membatasi kode PHP murni Anda dan seluruh view dikompilasi menjadi kode PHP biasa yang disimpan di cache untuk performa maksimal.
                </p>

                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <a href="{{ route('beranda') }}" class="btn-modern btn-primary-gradient">
                        <i data-feather="home"></i> Kembali ke Beranda
                    </a>
                    <a href="{{ route('datadiri') }}" class="btn-modern btn-outline-glass">
                        <i data-feather="user"></i> Lihat Data Diri
                    </a>
                    <a href="#fitur" class="btn-modern btn-outline-glass">
                        <i data-feather="arrow-down"></i> Pelajari Sintaks
                    </a>
                </div>
            </div>
        </div>

        <!-- Alur Kerja MVC Card -->
        <div class="glass-card">
            <h2 style="color: var(--text-heading); font-size: 1.35rem; font-weight: 700; margin-bottom: 1rem; display: flex; align-items: center; gap: 0.65rem;">
                <i data-feather="git-commit" style="color: #ffffff;"></i> Bagaimana Cara Kerja Halaman Ini?
            </h2>
            <p style="color: var(--text-body); font-size: 0.95rem; margin-bottom: 1.5rem;">
                Setiap permintaan (request) di Laravel melewati arsitektur <strong>Model-View-Controller (MVC)</strong> dengan tahapan sebagai berikut:
            </p>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1rem;">
                <div style="background: rgba(255, 255, 255, 0.03); border: 1px solid var(--border-glass); border-radius: 12px; padding: 1.25rem;">
                    <span style="font-size: 0.75rem; font-weight: 700; color: #ffffff; text-transform: uppercase; letter-spacing: 0.05em;">Langkah 1 &bull; Route</span>
                    <h3 style="color: var(--text-heading); font-size: 1rem; font-weight: 700; margin: 0.35rem 0 0.5rem 0;">routes/web.php</h3>
                    <p style="font-size: 0.82rem; color: var(--text-muted); font-family: 'JetBrains Mono', monospace;">
                        Route::get('/halo', [HaloController::class, 'index']);
                    </p>
                </div>

                <div style="background: rgba(255, 255, 255, 0.03); border: 1px solid var(--border-glass); border-radius: 12px; padding: 1.25rem;">
                    <span style="font-size: 0.75rem; font-weight: 700; color: #e4e4e7; text-transform: uppercase; letter-spacing: 0.05em;">Langkah 2 &bull; Controller</span>
                    <h3 style="color: var(--text-heading); font-size: 1rem; font-weight: 700; margin: 0.35rem 0 0.5rem 0;">HaloController.php</h3>
                    <p style="font-size: 0.82rem; color: var(--text-muted); font-family: 'JetBrains Mono', monospace;">
                        return view('halo');
                    </p>
                </div>

                <div style="background: rgba(255, 255, 255, 0.03); border: 1px solid var(--border-glass); border-radius: 12px; padding: 1.25rem;">
                    <span style="font-size: 0.75rem; font-weight: 700; color: #d4d4d8; text-transform: uppercase; letter-spacing: 0.05em;">Langkah 3 &bull; View Template</span>
                    <h3 style="color: var(--text-heading); font-size: 1rem; font-weight: 700; margin: 0.35rem 0 0.5rem 0;">halo.blade.php</h3>
                    <p style="font-size: 0.82rem; color: var(--text-muted); font-family: 'JetBrains Mono', monospace;">
                        &#64;extends('layouts.app')
                    </p>
                </div>
            </div>
        </div>

        <!-- Fitur & Sintaks Dasar Grid -->
        <div id="fitur">
            <div style="margin-bottom: 1.5rem;">
                <span class="tag-pill">Sintaks & Direktif</span>
                <h2 style="color: var(--text-heading); font-size: 1.6rem; font-weight: 700; margin-top: 0.4rem; letter-spacing: -0.01em;">
                    Fitur Inti <span class="gradient-text">Blade Templating</span>
                </h2>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 1.5rem;">
                
                <!-- 1. Menampilkan Data -->
                <div class="glass-card" style="display: flex; flex-direction: column;">
                    <span style="font-size: 0.75rem; font-weight: 700; color: #ffffff; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 0.5rem;">
                        01. Data Output
                    </span>
                    <h3 style="color: var(--text-heading); font-size: 1.15rem; font-weight: 700; margin-bottom: 0.5rem;">
                        Menampilkan Variabel
                    </h3>
                    <p style="color: var(--text-body); font-size: 0.9rem; flex-grow: 1; margin-bottom: 1rem;">
                        Tanda kurung kurawal ganda otomatis mengamankan teks dari serangan XSS via <code>htmlspecialchars</code>.
                    </p>
                    <div class="code-box">
<span class="code-comment">&lt;!-- Aman (XSS Protected) --&gt;</span>
&lt;h1&gt;Halo, &#123;&#123; <span class="code-var">$nama</span> &#125;&#125;&lt;/h1&gt;

<span class="code-comment">&lt;!-- Raw HTML tanpa filter --&gt;</span>
&#123;!! <span class="code-var">$kontenHtml</span> !!&#125;
                    </div>
                </div>

                <!-- 2. Percabangan Kondisional -->
                <div class="glass-card" style="display: flex; flex-direction: column;">
                    <span style="font-size: 0.75rem; font-weight: 700; color: #e4e4e7; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 0.5rem;">
                        02. Percabangan
                    </span>
                    <h3 style="color: var(--text-heading); font-size: 1.15rem; font-weight: 700; margin-bottom: 0.5rem;">
                        Direktif @@if &amp; @@else
                    </h3>
                    <p style="color: var(--text-body); font-size: 0.9rem; flex-grow: 1; margin-bottom: 1rem;">
                        Mengecek kondisi tanpa perlu membuka dan menutup tag <code>&lt;?php ?&gt;</code> secara manual.
                    </p>
                    <div class="code-box">
<span class="code-keyword">@@if</span> (<span class="code-var">$semester</span> &gt;= 5)
    &lt;span&gt;Semester Lanjutan&lt;/span&gt;
<span class="code-keyword">@@else</span>
    &lt;span&gt;Semester Awal&lt;/span&gt;
<span class="code-keyword">@@endif</span>
                    </div>
                </div>

                <!-- 3. Perulangan Loop -->
                <div class="glass-card" style="display: flex; flex-direction: column;">
                    <span style="font-size: 0.75rem; font-weight: 700; color: #d4d4d8; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 0.5rem;">
                        03. Perulangan
                    </span>
                    <h3 style="color: var(--text-heading); font-size: 1.15rem; font-weight: 700; margin-bottom: 0.5rem;">
                        Looping @@forelse &amp; @@empty
                    </h3>
                    <p style="color: var(--text-body); font-size: 0.9rem; flex-grow: 1; margin-bottom: 1rem;">
                        Iterasi array dengan penanganan fallback otomatis jika data kosong, ditambah variabel <code>$loop</code>.
                    </p>
                    <div class="code-box">
<span class="code-keyword">@@forelse</span> (<span class="code-var">$daftarMatkul</span> as <span class="code-var">$matkul</span>)
    &lt;li&gt;&#123;&#123; <span class="code-var">$loop-&gt;iteration</span> &#125;&#125;. &#123;&#123; <span class="code-var">$matkul</span> &#125;&#125;&lt;/li&gt;
<span class="code-keyword">@@empty</span>
    &lt;p&gt;Belum ada data matakuliah.&lt;/p&gt;
<span class="code-keyword">@@endforelse</span>
                    </div>
                </div>

                <!-- 4. Layout Inheritance -->
                <div class="glass-card" style="display: flex; flex-direction: column;">
                    <span style="font-size: 0.75rem; font-weight: 700; color: #a1a1aa; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 0.5rem;">
                        04. Layouting
                    </span>
                    <h3 style="color: var(--text-heading); font-size: 1.15rem; font-weight: 700; margin-bottom: 0.5rem;">
                        Inheritance Layout
                    </h3>
                    <p style="color: var(--text-body); font-size: 0.9rem; flex-grow: 1; margin-bottom: 1rem;">
                        Membuat kerangka induk (navbar, footer) sekali saja, lalu diwarisi oleh halaman anak menggunakan <code>@@extends</code>.
                    </p>
                    <div class="code-box">
<span class="code-keyword">@@extends</span>(<span class="code-string">'layouts.app'</span>)

<span class="code-keyword">@@section</span>(<span class="code-string">'title'</span>, <span class="code-string">'Judul Halaman'</span>)

<span class="code-keyword">@@section</span>(<span class="code-string">'content'</span>)
    &lt;h1&gt;Konten Halaman&lt;/h1&gt;
<span class="code-keyword">@@endsection</span>
                    </div>
                </div>

            </div>
        </div>

        <!-- Live Demo Render Section -->
        @php
            $teknologiUtama = [
                'Laravel 11 / 12 Framework',
                'Blade Template Engine',
                'Arsitektur Model-View-Controller (MVC)',
                'Noir & Platinum Design System',
                'Feather Icons Integration'
            ];
            $waktuRender = date('d F Y, H:i');
        @endphp

        <div class="glass-card">
            <h3 style="color: var(--text-heading); font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.65rem;">
                <i data-feather="check-circle" style="color: #ffffff;"></i> Demonstrasi Live Render Blade
            </h3>
            <p style="color: var(--text-body); font-size: 0.92rem; margin-bottom: 1.25rem;">
                Blok di bawah ini dieksekusi dan dirender langsung di server menggunakan direktif <code>&#64;php</code> dan perulangan <code>&#64;foreach</code>:
            </p>

            <div style="display: flex; flex-wrap: wrap; gap: 0.6rem; margin-bottom: 1.25rem;">
                @foreach ($teknologiUtama as $tech)
                    <span style="background: rgba(255, 255, 255, 0.05); border: 1px solid var(--border-glass); color: #f4f4f5; padding: 0.45rem 0.9rem; border-radius: 8px; font-size: 0.85rem; font-weight: 500; display: inline-flex; align-items: center; gap: 0.45rem;">
                        <span style="color: #ffffff; font-weight: 700;">✔</span> {{ $tech }}
                    </span>
                @endforeach
            </div>

            <p style="font-size: 0.82rem; color: var(--text-muted); border-top: 1px solid var(--border-glass); padding-top: 1rem;">
                Halaman ini berhasil dikompilasi pada <strong>{{ $waktuRender }} WIB</strong> oleh server Laravel.
            </p>
        </div>

    </div>
</div>
@include('layouts.footer')
