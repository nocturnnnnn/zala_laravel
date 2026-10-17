@include('layouts.header', ['title' => 'Kontak • Portofolio ' . $kontakInfo['nama']])
<div class="container">

    <!-- Section Header -->
    <div style="margin-bottom: 2.5rem;">
        <span class="tag-pill">Hubungi Saya</span>
        <h1
            style="color: var(--text-heading); font-size: 2.2rem; font-weight: 800; margin-top: 0.5rem; letter-spacing: -0.02em;">
            Mari <span class="gradient-text">Terhubung</span>
        </h1>
        <p style="color: var(--text-body); max-width: 600px;">
            Tertarik untuk berdiskusi seputar tugas pemrograman web, kolaborasi proyek Laravel, atau sekadar bertukar
            wawasan? Silakan hubungi saya melalui saluran di bawah ini.
        </p>
    </div>

    @if (session('success'))
        <div
            style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.3); color: #ffffff; padding: 1rem 1.5rem; border-radius: 12px; margin-bottom: 2rem; display: flex; align-items: center; gap: 0.75rem; box-shadow: 0 4px 20px rgba(255, 255, 255, 0.05);">
            <i data-feather="check-circle" style="width: 20px; height: 20px; color: #ffffff;"></i>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <div style="display: grid; grid-template-columns: 1fr 1.25fr; gap: 2rem; align-items: start;">

        <!-- Left: Contact Details Cards -->
        <div style="display: flex; flex-direction: column; gap: 1.5rem;">
            <div class="glass-card" style="padding: 2rem;">
                <h3
                    style="color: var(--text-heading); font-size: 1.25rem; font-weight: 700; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.65rem;">
                    <i data-feather="send" style="color: #ffffff;"></i> Saluran Komunikasi
                </h3>

                <div style="display: flex; flex-direction: column; gap: 1.25rem;">
                    @foreach ($kontakInfo['mediaSosial'] as $sosmed)
                        <a href="{{ $sosmed['url'] }}" target="_blank"
                            style="display: flex; align-items: center; gap: 1rem; padding: 1rem; border-radius: 14px; background: rgba(255, 255, 255, 0.03); border: 1px solid var(--border-glass); transition: all 0.25s ease;"
                            onmouseover="this.style.borderColor='rgba(255, 255, 255, 0.35)'; this.style.transform='translateX(4px)';"
                            onmouseout="this.style.borderColor='var(--border-glass)'; this.style.transform='translateX(0)';">
                            <div
                                style="padding: 0.65rem; border-radius: 10px; background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.12); color: #ffffff; display: flex; align-items: center; justify-content: center;">
                                <i data-feather="{{ $sosmed['icon'] }}" style="width: 20px; height: 20px;"></i>
                            </div>
                            <div style="flex: 1;">
                                <span
                                    style="font-size: 0.75rem; text-transform: uppercase; color: var(--text-muted); font-weight: 600; display: block; letter-spacing: 0.05em;">{{ $sosmed['platform'] }}</span>
                                <span
                                    style="color: var(--text-heading); font-weight: 600; font-size: 0.95rem;">{{ $sosmed['handle'] }}</span>
                            </div>
                            <i data-feather="external-link"
                                style="width: 16px; height: 16px; color: var(--text-muted);"></i>
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="glass-card" style="padding: 1.75rem;">
                <div style="display: flex; align-items: center; gap: 0.75rem;">
                    <div
                        style="padding: 0.65rem; border-radius: 10px; background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.12); color: #ffffff;">
                        <i data-feather="map-pin" style="width: 20px; height: 20px;"></i>
                    </div>
                    <div>
                        <h4 style="color: var(--text-heading); font-size: 1rem; font-weight: 700;">Lokasi Kampus</h4>
                        <p style="font-size: 0.88rem; color: var(--text-body);">{{ $kontakInfo['universitas'] }} &bull;
                            {{ $kontakInfo['lokasi'] }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right: Hubungi Saya CTA Card -->
        <div class="glass-card"
            style="padding: 2.25rem; display: flex; flex-direction: column; justify-content: space-between;">
            <div>
                <span class="tag-pill" style="margin-bottom: 1rem;">Formulir Langsung</span>
                <h3
                    style="color: var(--text-heading); font-size: 1.35rem; font-weight: 700; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.65rem;">
                    <i data-feather="" style="color: #ffffff;"></i> Kirimkan Pesan
                </h3>
                <p style="font-size: 0.92rem; color: var(--text-body); line-height: 1.7; margin-bottom: 1.5rem;">
                    Klik tombol di bawah ini untuk
                    membuka formulir pesan.
                </p>
            </div>

            <div>
                <a href="{{ route('hubungi') }}" class="btn-modern btn-primary-gradient"
                    style="width: 100%; text-decoration: none; justify-content: center; padding: 0.85rem 1.5rem;">
                    <i data-feather=""></i> Hubungi Saya
                </a>
            </div>
        </div>

    </div>

</div>
@include('layouts.footer')
