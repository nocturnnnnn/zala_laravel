<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $nama = 'Zala Risky Pratama';
        $nim = '2024150064';
        $semester = 'Semester 5';
        $matakuliah = 'Pemrograman Web Berbasis Framework';
        $salam = 'Selamat Datang di Web Portofolio';
        $deskripsi = 'Halo! Saya Zala Risky Pratama, mahasiswa yang sedang mendalami pengembangan web berbasis framework dengan Laravel. Selamat datang di portofolio digital saya.';
        
        $keahlian = [
            'Laravel Framework',
            'PHP & Object Oriented Programming',
            'MySQL Database',
            'Blade Templating Engine',
            'HTML5, CSS3, & JavaScript',
            'RESTful API & Git'
        ];

        return view('beranda', compact('nama', 'nim', 'semester', 'matakuliah', 'salam', 'deskripsi', 'keahlian'));
    }
}
