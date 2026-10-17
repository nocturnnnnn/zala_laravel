@include('layouts.header', ['title' => 'Data Diri • ' . $biodata['nama']])
<div class="container">
    
    <!-- Section Title -->
    <div style="margin-bottom: 2.5rem;">
        <span class="tag-pill">Profil Mahasiswa</span>
        <h1 style="color: var(--text-heading); font-size: 2.2rem; font-weight: 800; margin-top: 0.5rem; letter-spacing: -0.02em;">
            Data Diri & <span class="gradient-text">Informasi Akademik</span>
        </h1>
        <p style="color: var(--text-body);">Detail identitas mahasiswa, riwayat perkuliahan, dan kompetensi teknis.</p>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 2rem; align-items: start;">
        
        <!-- Left Column: Profile Card -->
        <div class="glass-card" style="text-align: center; padding: 2.5rem 1.5rem;">
            <!-- Avatar Skull Emblem -->
            <div style="width: 130px; height: 130px; margin: 0 auto 1.5rem auto; border-radius: 24px; overflow: hidden; background: #000000; border: 1px solid rgba(255, 255, 255, 0.22); box-shadow: 0 0 30px rgba(255, 255, 255, 0.08); display: flex; align-items: center; justify-content: center; padding: 8px;">
                <img src="{{ asset('images/logo.png') }}" alt="Avatar Skull" style="width: 100%; height: 100%; object-fit: cover; border-radius: 16px; filter: contrast(1.15) brightness(1.05);">
            </div>

            <h2 style="color: var(--text-heading); font-size: 1.35rem; font-weight: 800; margin-bottom: 0.25rem; letter-spacing: -0.01em;">
                {{ $biodata['nama'] }}
            </h2>
            <p style="color: var(--primary-light); font-weight: 600; font-size: 0.92rem; margin-bottom: 0.75rem;">
                NIM: {{ $biodata['nim'] }}
            </p>

            <span style="display: inline-block; background: rgba(255, 255, 255, 0.08); color: #ffffff; border: 1px solid rgba(255, 255, 255, 0.22); font-size: 0.78rem; font-weight: 600; padding: 0.25rem 0.85rem; border-radius: 9999px; margin-bottom: 1.5rem; letter-spacing: 0.02em;">
                ● {{ $biodata['status'] }}
            </span>

            <p style="font-size: 0.88rem; color: var(--text-body); line-height: 1.6; border-top: 1px solid var(--border-glass); padding-top: 1.25rem; text-align: left;">
                {{ $biodata['bio'] }}
            </p>

            <div style="margin-top: 1.5rem; text-align: left; display: flex; flex-direction: column; gap: 0.75rem; font-size: 0.88rem;">
                <div style="display: flex; align-items: center; gap: 0.6rem; color: var(--text-body);">
                    <i data-feather="map-pin" style="width: 16px; height: 16px; color: #ffffff;"></i>
                    <span>{{ $biodata['domisili'] }}</span>
                </div>
                <div style="display: flex; align-items: center; gap: 0.6rem; color: var(--text-body);">
                    <i data-feather="mail" style="width: 16px; height: 16px; color: #ffffff;"></i>
                    <span>{{ $biodata['email'] }}</span>
                </div>
            </div>
        </div>

        <!-- Right Column: Detail Information -->
        <div style="display: flex; flex-direction: column; gap: 2rem;">
            
            <!-- Academic Information Table / Grid -->
            <div class="glass-card">
                <h3 style="color: var(--text-heading); font-size: 1.2rem; font-weight: 700; margin-bottom: 1.25rem; display: flex; align-items: center; gap: 0.65rem;">
                    <i data-feather="award" style="color: #ffffff;"></i> Informasi Akademik
                </h3>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem;">
                    <div style="background: rgba(255, 255, 255, 0.03); border: 1px solid var(--border-glass); border-radius: 12px; padding: 1rem;">
                        <span style="font-size: 0.78rem; text-transform: uppercase; color: var(--text-muted); font-weight: 600; letter-spacing: 0.05em;">Nama Lengkap</span>
                        <p style="color: var(--text-heading); font-weight: 600; font-size: 1rem; margin-top: 0.2rem;">{{ $biodata['nama'] }}</p>
                    </div>

                    <div style="background: rgba(255, 255, 255, 0.03); border: 1px solid var(--border-glass); border-radius: 12px; padding: 1rem;">
                        <span style="font-size: 0.78rem; text-transform: uppercase; color: var(--text-muted); font-weight: 600; letter-spacing: 0.05em;">Nomor Induk Mahasiswa (NIM)</span>
                        <p style="color: var(--text-heading); font-weight: 600; font-size: 1rem; margin-top: 0.2rem;">{{ $biodata['nim'] }}</p>
                    </div>

                    <div style="background: rgba(255, 255, 255, 0.03); border: 1px solid var(--border-glass); border-radius: 12px; padding: 1rem;">
                        <span style="font-size: 0.78rem; text-transform: uppercase; color: var(--text-muted); font-weight: 600; letter-spacing: 0.05em;">Semester Saat Ini</span>
                        <p style="color: var(--text-heading); font-weight: 600; font-size: 1rem; margin-top: 0.2rem;">{{ $biodata['semester'] }}</p>
                    </div>

                    <div style="background: rgba(255, 255, 255, 0.03); border: 1px solid var(--border-glass); border-radius: 12px; padding: 1rem;">
                        <span style="font-size: 0.78rem; text-transform: uppercase; color: var(--text-muted); font-weight: 600; letter-spacing: 0.05em;">Mata Kuliah</span>
                        <p style="color: var(--text-heading); font-weight: 600; font-size: 1rem; margin-top: 0.2rem;">{{ $biodata['matakuliah'] }}</p>
                    </div>

                    <div style="background: rgba(255, 255, 255, 0.03); border: 1px solid var(--border-glass); border-radius: 12px; padding: 1rem; grid-column: span 2;">
                        <span style="font-size: 0.78rem; text-transform: uppercase; color: var(--text-muted); font-weight: 600; letter-spacing: 0.05em;">Program Studi & Fakultas</span>
                        <p style="color: var(--text-heading); font-weight: 600; font-size: 1rem; margin-top: 0.2rem;">{{ $biodata['prodi'] }} &bull; {{ $biodata['fakultas'] }}</p>
                    </div>

                    <div style="background: rgba(255, 255, 255, 0.03); border: 1px solid var(--border-glass); border-radius: 12px; padding: 1rem; grid-column: span 2;">
                        <span style="font-size: 0.78rem; text-transform: uppercase; color: var(--text-muted); font-weight: 600; letter-spacing: 0.05em;">Perguruan Tinggi</span>
                        <p style="color: var(--text-heading); font-weight: 600; font-size: 1rem; margin-top: 0.2rem;">{{ $biodata['universitas'] }}</p>
                    </div>
                </div>
            </div>

            <!-- Skills Progress -->
            <div class="glass-card">
                <h3 style="color: var(--text-heading); font-size: 1.2rem; font-weight: 700; margin-bottom: 1.25rem; display: flex; align-items: center; gap: 0.65rem;">
                    <i data-feather="check-circle" style="color: #ffffff;"></i> Kemampuan & Keahlian
                </h3>

                <div style="display: flex; flex-direction: column; gap: 1.1rem;">
                    @foreach($hardSkills as $skill)
                        <div>
                            <div style="display: flex; justify-content: space-between; font-size: 0.88rem; margin-bottom: 0.35rem;">
                                <span style="color: var(--text-heading); font-weight: 600;">{{ $skill['nama'] }}</span>
                                <span style="color: var(--text-muted); font-family: 'JetBrains Mono', monospace; font-size: 0.82rem;">{{ $skill['level'] }}</span>
                            </div>
                            <div style="height: 6px; width: 100%; background: rgba(255, 255, 255, 0.08); border-radius: 9999px; overflow: hidden;">
                                <div style="width: {{ $skill['level'] }}; height: 100%; background: linear-gradient(90deg, #52525b, #ffffff); border-radius: 9999px;"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Riwayat Pendidikan -->
            <div class="glass-card">
                <h3 style="color: var(--text-heading); font-size: 1.2rem; font-weight: 700; margin-bottom: 1.25rem; display: flex; align-items: center; gap: 0.65rem;">
                    <i data-feather="book" style="color: #ffffff;"></i> Riwayat Pendidikan
                </h3>

                <div style="display: flex; flex-direction: column; gap: 1.2rem;">
                    @foreach($riwayatPendidikan as $edu)
                        <div style="border-left: 2px solid rgba(255, 255, 255, 0.35); padding-left: 1rem; position: relative;">
                            <span style="font-size: 0.78rem; color: #a1a1aa; font-weight: 600; letter-spacing: 0.03em;">{{ $edu['periode'] }}</span>
                            <h4 style="color: var(--text-heading); font-size: 1rem; font-weight: 700; margin: 0.2rem 0;">{{ $edu['institusi'] }}</h4>
                            <p style="font-size: 0.85rem; color: var(--text-body);">{{ $edu['jurusan'] }} ({{ $edu['jenjang'] }})</p>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
@include('layouts.footer')
