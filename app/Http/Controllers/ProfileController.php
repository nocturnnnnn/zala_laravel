<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function index()
    {
        $nama = 'Zala Risky Pratama';
        $email = 'zalarisky807@gmail.com';
        $bio = 'Saya Mahasiswa Semester 5 di Unsiq yang belajar Laravel';

        return view('profile', compact('nama', 'email', 'bio'));
    }
}
