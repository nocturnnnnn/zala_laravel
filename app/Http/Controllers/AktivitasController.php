<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AktivitasController extends Controller
{
    public function index()
    {
        $daftarAktivitas = [
            [
                'judul' => 'Pengembangan Web Portofolio Berbasis Laravel',
                'kategori' => 'Tugas Proyek',
                'status' => 'Selesai',
                'tanggal' => 'Semester 5 • 2026',
                'deskripsi' => 'Membangun aplikasi web portofolio personal yang menerapkan arsitektur MVC (Model-View-Controller) dengan multiple controller, routing dinamis, dan Blade layout inheritance.',
                'tags' => ['Laravel', 'Blade', 'MVC Architecture', 'Responsive UI'],
                'icon' => 'layout'
            ],
            [
                'judul' => 'Eksplorasi Routing & Controller Laravel',
                'kategori' => 'Praktikum Perkuliahan',
                'status' => 'Selesai',
                'tanggal' => 'September 2026',
                'deskripsi' => 'Praktikum mendalam mengenai routing web, pengiriman parameter dari route ke controller, serta pengembalian view dengan data compact.',
                'tags' => ['Routing', 'Controllers', 'PHP OOP'],
                'icon' => 'code'
            ],
            [
                'judul' => 'Implementasi Blade Templating & Component System',
                'kategori' => 'Eksplorasi Mandiri',
                'status' => 'Aktif',
                'tanggal' => 'Oktober 2026',
                'deskripsi' => 'Mempelajari sintaks Blade direktif (@if, @foreach, @forelse), proteksi otomatis terhadap XSS, dan pembuatan reusable component.',
                'tags' => ['Blade Directives', 'Security XSS', 'Components'],
                'icon' => 'terminal'
            ],
            [
                'judul' => 'Perancangan Database & Migrasi Eloquent ORM',
                'kategori' => 'Riset & Perancangan',
                'status' => 'Dalam Pengerjaan',
                'tanggal' => 'Target Semester 5',
                'deskripsi' => 'Mempersiapkan struktur skema database terintegrasi menggunakan Laravel Migration, Seeder, dan relasi data Eloquent.',
                'tags' => ['MySQL', 'Eloquent ORM', 'Database Migration'],
                'icon' => 'database'
            ]
        ];

        return view('aktivitas', compact('daftarAktivitas'));
    }
}
