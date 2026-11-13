<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bukti Pemesanan - CINEMA TIX</title>
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }
:root {
    --bg: #080d1b; --navy: #111a30; --card: #17233b;
    --orange: #ff9f43; --white: #ffffff; --muted: #aab6ca;
}
body { font-family: 'Segoe UI', Arial, sans-serif; background: var(--bg); color: var(--white); padding: 40px 6%; display: flex; justify-content: center; }

.ticket-card { background: var(--card); width: 100%; max-width: 600px; padding: 40px; border-radius: 20px; border: 1px solid #293650; box-shadow: 0 15px 35px #0005; }
.ticket-header { text-align: center; border-bottom: 2px dashed #293650; padding-bottom: 25px; margin-bottom: 25px; }
.ticket-header h1 { color: var(--orange); font-size: 28px; margin-bottom: 5px; }
.ticket-header p { color: var(--muted); font-size: 14px; }

.ticket-body { display: flex; flex-direction: column; gap: 15px; margin-bottom: 30px; }
.info-row { display: flex; justify-content: space-between; font-size: 15px; }
.info-row span:first-child { color: var(--muted); }
.info-row span:last-child { font-weight: bold; }

.booking-code { background: #111a30; padding: 15px; border-radius: 10px; text-align: center; border: 1px solid #34425e; margin-bottom: 25px; }
.booking-code span { display: block; font-size: 12px; color: var(--muted); margin-bottom: 5px; }
.booking-code h2 { color: var(--orange); letter-spacing: 2px; font-size: 24px; }

.btn { display: block; width: 100%; text-align: center; background: var(--orange); color: #111; padding: 14px; border-radius: 9px; text-decoration: none; font-weight: bold; border: none; cursor: pointer; }
.btn:hover { background: #ffc078; }
</style>
</head>
<body>

    <div class="ticket-card">
        <div class="ticket-header">
            <h1>CINEMA TIX E-TICKET</h1>
            <p>Terima kasih telah memesan tiket bioskop online.</p>
        </div>

        <div class="booking-code">
            <span>KODE BOOKING KAMU</span>
            <h2>{{ $kode_booking ?? 'CT-X98Q2L1P' }}</h2>
        </div>

        <div class="ticket-body">
            <div class="info-row">
                <span>Nama Pemesan:</span>
                <span>{{ $nama ?? 'Tamu Bioskop' }}</span>
            </div>
            <div class="info-row">
                <span>Judul Film:</span>
                <span>{{ $film ?? 'Avengers Endgame' }}</span>
            </div>
            <div class="info-row">
                <span>Jadwal Tayang:</span>
                <span>{{ $jadwal ?? '19:00 WIB' }}</span>
            </div>
            <div class="info-row">
                <span>Nomor Kursi:</span>
                <span>{{ is_array($daftar_kursi ?? null) ? implode(', ', $daftar_kursi) : 'B3' }}</span>
            </div>
            <div class="info-row">
                <span>Jumlah Tiket:</span>
                <span>{{ $jumlah ?? 1 }} Kursi</span>
            </div>
            <div class="info-row" style="border-top: 1px solid #293650; padding-top: 15px; margin-top: 5px; font-size: 18px;">
                <span>Total Pembayaran:</span>
                <span style="color: var(--orange);">Rp{{ number_format($total ?? 45000, 0, ',', '.') }}</span>
            </div>
        </div>

        <a href="/" class="btn">Selesai & Kembali ke Beranda</a>
    </div>

</body>
</html>