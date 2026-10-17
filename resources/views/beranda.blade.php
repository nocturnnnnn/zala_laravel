@include('layouts.header', ['title' => 'Beranda • Portofolio ' . $nama])
<div class="container">
        <div class="hero-wrapper" style="display: flex; flex-direction: column; gap: 2.5rem;">

            <!-- Hero Card -->
            <div class="glass-card hero-card"
                style="display: grid; grid-template-columns: 1fr auto; gap: 2.5rem; align-items: center;">
                <div class="hero-text">
                    <div class="tag-pill" style="margin-bottom: 1.25rem;">
                        👋 {{ $salam }}
                    </div>

                    <h1
                        style="font-size: clamp(2rem, 4vw, 3.1rem); font-weight: 800; color: var(--text-heading); line-height: 1.2; margin-bottom: 1rem; letter-spacing: -0.02em;">
                        Hai, Saya <span class="gradient-text">{{ $nama }}</span>
                    </h1>

                    <p style="font-size: 1.08rem; color: var(--text-body); max-width: 620px; margin-bottom: 1.75rem; line-height: 1.7;">
                        {{ $deskripsi }}
                    </p>

                    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <a href="{{ route('datadiri') }}" class="btn-modern btn-primary-gradient">
                            <i data-feather="user"></i> Lihat Data Diri
                        </a>
                        <a href="{{ route('aktivitas') }}" class="btn-modern btn-outline-glass">
                            <i data-feather="activity"></i> Aktivitas & Proyek
                        </a>
                        <a href="{{ route('kontak') }}" class="btn-modern btn-outline-glass">
                            <i data-feather="send"></i> Kontak Saya
                        </a>
                        <a href="{{ route('halo') }}" class="btn-modern btn-outline-glass">
                            <i data-feather="code"></i> Pengantar
                        </a>
                    </div>
                </div>

                <!-- Avatar / Logo Emblem Showcase -->
                <div class="avatar-container" style="display: flex; justify-content: center; align-items: center;">
                    <div class="avatar-ring"
                        style="width: 190px; height: 190px; border-radius: 28px; background: rgba(255, 255, 255, 0.04); display: flex; align-items: center; justify-content: center; border: 1px solid rgba(255, 255, 255, 0.18); box-shadow: 0 0 35px rgba(255, 255, 255, 0.08); padding: 12px; transition: all 0.3s ease;">
                        <div
                            style="width: 100%; height: 100%; border-radius: 20px; overflow: hidden; background: #000000; display: flex; flex-direction: column; align-items: center; justify-content: center; border: 1px solid rgba(255, 255, 255, 0.15); box-shadow: inset 0 0 20px rgba(255, 255, 255, 0.05);">
                            <img src="{{ asset('images/logo.png') }}" alt="Skull Logo"
                                style="width: 100%; height: 100%; object-fit: cover; display: block; filter: contrast(1.15) brightness(1.05);">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Summary 3-Grid -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.5rem;">
                <div class="glass-card" style="padding: 1.75rem;">
                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                        <div
                            style="padding: 0.65rem; border-radius: 12px; background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.12); color: #ffffff;">
                            <i data-feather="award" style="width: 20px; height: 20px;"></i>
                        </div>
                        <span
                            style="font-size: 0.82rem; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.05em;">NIM Mahasiswa</span>
                    </div>
                    <h3 style="color: var(--text-heading); font-size: 1.35rem; font-weight: 700; letter-spacing: -0.01em;">{{ $nim }}</h3>
                    <p style="font-size: 0.88rem; color: var(--text-body); margin-top: 0.25rem;">Program Studi Teknik Informatika</p>
                </div>

                <div class="glass-card" style="padding: 1.75rem;">
                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                        <div
                            style="padding: 0.65rem; border-radius: 12px; background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.12); color: #ffffff;">
                            <i data-feather="book-open" style="width: 20px; height: 20px;"></i>
                        </div>
                        <span
                            style="font-size: 0.82rem; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.05em;">Jenjang Semester</span>
                    </div>
                    <h3 style="color: var(--text-heading); font-size: 1.35rem; font-weight: 700; letter-spacing: -0.01em;">{{ $semester }}</h3>
                    <p style="font-size: 0.88rem; color: var(--text-body); margin-top: 0.25rem;">Tahun Ajaran 2026 / 2027</p>
                </div>

                <div class="glass-card" style="padding: 1.75rem;">
                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                        <div
                            style="padding: 0.65rem; border-radius: 12px; background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.12); color: #ffffff;">
                            <i data-feather="layers" style="width: 20px; height: 20px;"></i>
                        </div>
                        <span
                            style="font-size: 0.82rem; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.05em;">Mata Kuliah</span>
                    </div>
                    <h3 style="color: var(--text-heading); font-size: 1.15rem; font-weight: 700; letter-spacing: -0.01em;">{{ $matakuliah }}</h3>
                    <p style="font-size: 0.88rem; color: var(--text-body); margin-top: 0.25rem;">Framework Laravel & Blade Engine</p>
                </div>
            </div>

            <!-- Tech Focus Card -->
            <div class="glass-card">
                <h3
                    style="color: var(--text-heading); font-size: 1.25rem; font-weight: 700; margin-bottom: 1rem; display: flex; align-items: center; gap: 0.65rem;">
                    <i data-feather="cpu" style="color: #ffffff;"></i> Fokus Teknologi & Keahlian
                </h3>
                <p style="color: var(--text-body); margin-bottom: 1.25rem; font-size: 0.95rem;">
                    Berikut beberapa kompetensi teknis yang sedang dipelajari dan diterapkan dalam perkuliahan pemrograman web berbasis framework:
                </p>
                <div style="display: flex; flex-wrap: wrap; gap: 0.75rem;">
                    @foreach ($keahlian as $skill)
                        <span
                            style="background: rgba(255, 255, 255, 0.05); border: 1px solid var(--border-glass); color: #f4f4f5; padding: 0.5rem 1rem; border-radius: 10px; font-size: 0.9rem; font-weight: 500; display: inline-flex; align-items: center; gap: 0.5rem; transition: all 0.2s ease;">
                            <span style="color: #ffffff; font-weight: 700;">✔</span> {{ $skill }}
                        </span>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@include('layouts.footer')
