@include('layouts.header', ['title' => 'Aktivitas & Proyek • Portofolio Zala Risky Pratama'])
<div class="container">
    
    <!-- Section Header -->
    <div style="margin-bottom: 2.5rem;">
        <span class="tag-pill">Rekap Kegiatan & Perkuliahan</span>
        <h1 style="color: var(--text-heading); font-size: 2.2rem; font-weight: 800; margin-top: 0.5rem; letter-spacing: -0.02em;">
            Aktivitas & <span class="gradient-text">Proyek Perkuliahan</span>
        </h1>
        <p style="color: var(--text-body); max-width: 650px;">
            Daftar tugas, praktikum laboratorium, dan proyek implementasi dalam mata kuliah <strong>Pemrograman Web Berbasis Framework</strong> di Semester 5.
        </p>
    </div>

    <!-- Activity Grid -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(330px, 1fr)); gap: 1.75rem;">
        @forelse($daftarAktivitas as $act)
            <div class="glass-card" style="display: flex; flex-direction: column; justify-content: space-between; border-radius: 18px; padding: 2rem; position: relative;">
                
                <div>
                    <!-- Top Bar: Category & Status Badge -->
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.25rem;">
                        <span style="font-size: 0.78rem; font-weight: 700; text-transform: uppercase; color: var(--text-muted); letter-spacing: 0.06em;">
                            {{ $act['kategori'] }}
                        </span>

                        @if($act['status'] === 'Selesai')
                            <span style="background: rgba(255, 255, 255, 0.12); color: #ffffff; border: 1px solid rgba(255, 255, 255, 0.3); font-size: 0.75rem; font-weight: 600; padding: 0.2rem 0.75rem; border-radius: 9999px;">
                                ● {{ $act['status'] }}
                            </span>
                        @elseif($act['status'] === 'Aktif')
                            <span style="background: rgba(255, 255, 255, 0.06); color: #e4e4e7; border: 1px solid rgba(255, 255, 255, 0.18); font-size: 0.75rem; font-weight: 600; padding: 0.2rem 0.75rem; border-radius: 9999px;">
                                ⚡ {{ $act['status'] }}
                            </span>
                        @else
                            <span style="background: rgba(255, 255, 255, 0.04); color: #a1a1aa; border: 1px solid rgba(255, 255, 255, 0.12); font-size: 0.75rem; font-weight: 600; padding: 0.2rem 0.75rem; border-radius: 9999px;">
                                ⏳ {{ $act['status'] }}
                            </span>
                        @endif
                    </div>

                    <!-- Icon & Title -->
                    <div style="display: flex; align-items: flex-start; gap: 0.85rem; margin-bottom: 0.75rem;">
                        <div style="padding: 0.65rem; border-radius: 12px; background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.12); color: #ffffff; flex-shrink: 0; margin-top: 2px;">
                            <i data-feather="{{ $act['icon'] ?? 'check' }}" style="width: 20px; height: 20px;"></i>
                        </div>
                        <div>
                            <h3 style="color: var(--text-heading); font-size: 1.15rem; font-weight: 700; line-height: 1.4; letter-spacing: -0.01em;">
                                {{ $act['judul'] }}
                            </h3>
                            <span style="font-size: 0.8rem; color: var(--text-muted); display: block; margin-top: 0.2rem;">
                                {{ $act['tanggal'] }}
                            </span>
                        </div>
                    </div>

                    <!-- Description -->
                    <p style="color: var(--text-body); font-size: 0.92rem; line-height: 1.6; margin: 1rem 0 1.5rem 0;">
                        {{ $act['deskripsi'] }}
                    </p>
                </div>

                <!-- Tags / Badges -->
                <div style="display: flex; flex-wrap: wrap; gap: 0.45rem; border-top: 1px solid var(--border-glass); padding-top: 1.25rem;">
                    @foreach($act['tags'] as $tag)
                        <span style="background: rgba(255, 255, 255, 0.04); border: 1px solid rgba(255, 255, 255, 0.1); color: #d4d4d8; font-size: 0.76rem; font-weight: 500; padding: 0.25rem 0.65rem; border-radius: 6px;">
                            #{{ $tag }}
                        </span>
                    @endforeach
                </div>

            </div>
        @empty
            <div class="glass-card" style="grid-column: 1 / -1; text-align: center; padding: 3rem;">
                <p style="color: var(--text-muted);">Belum ada aktivitas yang ditambahkan.</p>
            </div>
        @endforelse
    </div>

</div>
@include('layouts.footer')
