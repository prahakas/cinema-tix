<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pilih Kursi & Pesan - CINEMA TIX</title>
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }
:root {
    --bg: #080d1b; --navy: #111a30; --card: #17233b;
    --orange: #ff9f43; --white: #ffffff; --muted: #aab6ca;
}
body { font-family: 'Segoe UI', Arial, sans-serif; background: var(--bg); color: var(--white); padding: 40px 6%; }

.back-link { display: inline-block; color: var(--orange); text-decoration: none; margin-bottom: 25px; font-weight: 600; }
.booking-grid { display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 30px; }
.card { background: var(--card); padding: 30px; border-radius: 18px; border: 1px solid #293650; }
.card h2 { margin-bottom: 20px; font-size: 22px; color: var(--orange); }

/* LAYAR BIOSKOP */
.screen-bar { background: #293650; text-align: center; padding: 8px; border-radius: 6px; font-size: 13px; letter-spacing: 2px; margin-bottom: 30px; color: var(--muted); }
.seats-layout { display: grid; grid-template-columns: repeat(6, 1fr); gap: 10px; justify-content: center; margin-bottom: 25px; }
.seat { background: #223150; border: 1px solid #3d517b; padding: 12px 0; text-align: center; border-radius: 6px; cursor: pointer; font-size: 13px; font-weight: bold; transition: .2s; }
.seat:hover, .seat.selected { background: var(--orange); color: #111; border-color: var(--orange); }
.seat.booked { background: #4a5568; color: #a0aec0; cursor: not-allowed; }

/* FORM INPUT */
.form-group { margin-bottom: 18px; }
.form-group label { display: block; margin-bottom: 8px; font-size: 14px; color: var(--muted); }
.form-group input { width: 100%; padding: 12px 15px; background: #111a30; border: 1px solid #34425e; border-radius: 8px; color: white; outline: none; }
.form-group input:focus { border-color: var(--orange); }

.summary-total { display: flex; justify-content: space-between; font-size: 18px; font-weight: bold; margin: 20px 0; border-top: 1px solid #293650; padding-top: 15px; }
.btn { display: block; width: 100%; text-align: center; background: var(--orange); color: #111; padding: 14px; border-radius: 9px; text-decoration: none; font-weight: bold; border: none; cursor: pointer; font-size: 16px; }
@media(max-width: 900px) { .booking-grid { grid-template-columns: 1fr; } }
</style>
</head>
<body>

    <a href="/detail" class="back-link">← Kembali ke Rincian Film</a>

    <div class="booking-grid">
        <!-- PILIH KURSI -->
        <div class="card">
            <h2>Pilih Kursi Bioskop</h2>
            <div class="screen-bar">LAYAR BIOSKOP</div>
            <div class="seats-layout">
                <div class="seat booked">A1</div>
                <div class="seat booked">A2</div>
                <div class="seat">A3</div>
                <div class="seat">A4</div>
                <div class="seat">A5</div>
                <div class="seat">A6</div>
                <div class="seat">B1</div>
                <div class="seat">B2</div>
                <div class="seat selected">B3</div>
                <div class="seat">B4</div>
                <div class="seat">B5</div>
                <div class="seat">B6</div>
                <div class="seat">C1</div>
                <div class="seat">C2</div>
                <div class="seat">C3</div>
                <div class="seat">C4</div>
                <div class="seat">C5</div>
                <div class="seat">C6</div>
            </div>
            <p style="font-size: 13px; color: var(--muted);">* Kursi terpilih otomatis ditandai warna oranye.</p>
        </div>

        <!-- FORM DATA PEMESAN -->
        <div class="card">
            <h2>Data Pemesan & Pembayaran</h2>
            <form action="/" method="GET" onsubmit="alert('Pesanan berhasil dibuat! E-Ticket akan dikirim.')">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" placeholder="Masukkan nama kamu" required>
                </div>
                <div class="form-group">
                    <label>Nomor WhatsApp / HP</label>
                    <input type="tel" placeholder="08xxxxxxxxxx" required>
                </div>
                <div class="form-group">
                    <label>Metode Pembayaran</label>
                    <input type="text" value="QRIS / Transfer Bank" readonly style="color: var(--orange);">
                </div>

                <div class="summary-total">
                    <span>Total Pembayaran:</span>
                    <span style="color: var(--orange);">Rp45.000</span>
                </div>

                <button type="submit" class="btn">Konfirmasi & Pesan Tiket</button>
            </form>
        </div>
    </div>

</body>
</html>