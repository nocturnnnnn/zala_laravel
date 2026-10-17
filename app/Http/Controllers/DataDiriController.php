<?php

namespace App\Http\Controllers;

class DataDiriController extends Controller
{
    public function index()
    {
        $biodata = [
            'nama' => 'Zala Risky Pratama',
            'nim' => '2024150064',
            'semester' => 'Semester 5',
            'prodi' => 'Teknik Informatika',
            'fakultas' => 'Fakultas Teknik dan Ilmu Komputer (FASTIKOM)',
            'universitas' => 'Universitas Sains Al-Qur\'an (UNSIQ) Jawa Tengah',
            'matakuliah' => 'Pemrograman Web Berbasis Framework',
            'email' => 'zalarisky807@gmail.com',
            'domisili' => 'Wonosobo, Jawa Tengah',
            'status' => 'Mahasiswa Aktif',
            'bio' => 'Saya mahasiswa Semester 5 di UNSIQ yang memiliki antusiasme tinggi terhadap rekayasa perangkat lunak dan pengembangan web modern berbasis framework Laravel.',
        ];

        $riwayatPendidikan = [
            [
                'jenjang' => 'Perguruan Tinggi',
                'institusi' => 'Universitas Sains Al-Qur\'an (UNSIQ) Jawa Tengah',
                'jurusan' => 'S1 Teknik Informatika',
                'periode' => '2024 - Sekarang (Semester 5)',
            ],
            [
                'jenjang' => 'Sekolah Menengah Kejuruan',
                'institusi' => 'SMK Negeri 1 Wonosobo',
                'jurusan' => 'Rekayasa Perangkat Lunak',
                'periode' => 'Lulus Tahun 2024',
            ],
        ];

        $hardSkills = [
            ['nama' => 'PHP (OOP & MVC)', 'level' => '85%'],
            ['nama' => 'Laravel Framework', 'level' => '80%'],
            ['nama' => 'Blade Templating', 'level' => '85%'],
            ['nama' => 'MySQL / Database Design', 'level' => '78%'],
            ['nama' => 'HTML5 & Modern CSS', 'level' => '88%'],
            ['nama' => 'Git & Version Control', 'level' => '75%'],
        ];

        return view('datadiri', compact('biodata', 'riwayatPendidikan', 'hardSkills'));
    }
}
