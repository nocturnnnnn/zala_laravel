<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $kontakInfo = [
            'nama' => 'Zala Risky Pratama',
            'nim' => '2024150064',
            'email' => 'zalarisky807@gmail.com',
            'nomor' => '085185021163',
            'github' => 'https://github.com/nocturnnnnn',
            'lokasi' => 'Wonosobo, Jawa Tengah, Indonesia',
            'universitas' => 'Universitas Sains Al-Qur\'an (UNSIQ)',
            'mediaSosial' => [
                [
                    'platform' => 'WhatsApp / No. HP',
                    'handle' => '085185021163',
                    'url' => 'https://wa.me/6285185021163',
                    'icon' => 'phone',
                ],
                [
                    'platform' => 'GitHub',
                    'handle' => 'github.com/nocturnnnnn',
                    'url' => 'https://github.com/nocturnnnnn',
                    'icon' => 'github',
                ],
                [
                    'platform' => 'Email',
                    'handle' => 'zalarisky807@gmail.com',
                    'url' => 'mailto:zalarisky807@gmail.com',
                    'icon' => 'mail',
                ],
            ],
        ];

        return view('kontak', compact('kontakInfo'));
    }

    public function hubungi()
    {
        return view('hubungi');
    }

    public function kirimPesan(Request $request)
    {
        $request->validate([
            'nama_pengirim' => 'required|min:3',
            'email_pengirim' => 'nullable|email',
            'pesan' => 'required|min:5',
        ]);

        return back()->with('success', 'Terima kasih! Pesan Anda telah berhasil terkirim kepada Zala Risky Pratama.');
    }
}
