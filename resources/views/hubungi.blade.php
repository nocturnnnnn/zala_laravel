@include('layouts.header', ['title' => 'Hubungi Saya'])

<div class="container">
    <p>
        <a href="{{ route('kontak') }}">&larr; Kembali ke Kontak</a>
    </p>

    <h1>Hubungi Saya</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('kontak.kirim') }}" method="POST">
        @csrf

        <div>
            <label for="nama_pengirim">Nama Anda:</label><br>
            <input type="text" id="nama_pengirim" name="nama_pengirim" required>
            @error('nama_pengirim')
                <br><small>{{ $message }}</small>
            @enderror
        </div>
        <br>

        <div>
            <label for="pesan">Pesan atau Catatan:</label><br>
            <textarea id="pesan" name="pesan" rows="4" required>{{ old('pesan') }}</textarea>
            @error('pesan')
                <br><small>{{ $message }}</small>
            @enderror
        </div>
        <br>

        <div>
            <button type="submit">Kirim Pesan Sekarang</button>
            <button type="reset">Batal Kirim</button>
        </div>
    </form>
</div>

@include('layouts.footer')
