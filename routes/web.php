<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini adalah tempat mendaftarkan semua web routes untuk aplikasi kamu.
|
*/

// 1. Halaman Utama / Katalog Tiket (Home)
Route::get('/', function () {
    return view('home');
});

// 2. Halaman Rincian Tiket (Detail)
Route::get('/detail', function () {
    return view('detail');
})->name('film.detail');

// 3. Halaman Interaktif Pemilihan Kursi & Pengisian Data (Booking)
Route::get('/booking', function () {
    return view('booking');
});

// 4. Proses & Halaman Ringkasan/Bukti Pemesanan (Summary & E-Ticket)
Route::post('/summary', function (Request $request) {

    $data = $request->validate([
        'nama' => 'required|string|min:3|max:100',
        'email' => 'required|email',
        'telepon' => 'required|digits_between:10,15',
        'tanggal' => 'required|date|after_or_equal:today',
        'jadwal' => 'required',
        'film' => 'required',
        'kursi' => 'required|string',
    ]);

    $kursi = array_filter(explode(',', $data['kursi']));

    if (
        count($kursi) < 1 ||
        count($kursi) > 6 ||
        count(array_unique($kursi)) !== count($kursi)
    ) {
        return back()->withErrors([
            'kursi' => 'Pilihan kursi tidak valid atau melebihi batas.'
        ])->withInput();
    }

    $data['daftar_kursi'] = $kursi;
    $data['jumlah'] = count($kursi);
    $data['total'] = count($kursi) * 45000;
    $data['kode_booking'] = 'CT-' . strtoupper(Str::random(8));

    return view('summary', $data);
});