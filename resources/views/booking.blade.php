
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Booking Kursi - CINEMA TIX</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #0b1020;
            color: white;
        }

        header {
            background: #11182b;
            padding: 22px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: #ff9f43;
            font-size: 27px;
            font-weight: bold;
        }

        header a {
            color: white;
            text-decoration: none;
        }

        .container {
            max-width: 950px;
            margin: 45px auto;
            padding: 20px;
        }

        h1 {
            margin-bottom: 10px;
            font-size: 32px;
        }

        .subtitle {
            color: #aeb8ca;
            margin-bottom: 30px;
        }

        .card {
            background: #182238;
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 25px;
        }

        .card h2 {
            margin-bottom: 25px;
        }

        .screen {
            max-width: 500px;
            margin: 15px auto 40px;
            padding: 14px;
            text-align: center;
            color: #111;
            font-weight: bold;
            letter-spacing: 5px;
            background: linear-gradient(
                90deg,
                #ff9f43,
                #ffd18c
            );
            border-radius: 50% 50% 8px 8px;
        }

        .seats {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 13px;
        }

        .seat-row {
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .row-label {
            width: 20px;
            font-weight: bold;
        }

        .seat {
            width: 38px;
            height: 35px;
            border: none;
            border-radius: 8px 8px 4px 4px;
            background: #16a36a;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        .seat:hover:not(:disabled) {
            transform: scale(1.08);
        }

        .seat.selected {
            background: #ff9f43;
            color: #111;
        }

        .seat.occupied {
            background: #606779;
            cursor: not-allowed;
        }

        .legend {
            display: flex;
            justify-content: center;
            gap: 22px;
            flex-wrap: wrap;
            margin-top: 30px;
            color: #c4c8d4;
            font-size: 14px;
        }

        .dot {
            display: inline-block;
            width: 13px;
            height: 13px;
            border-radius: 4px;
            margin-right: 6px;
        }

        .green {
            background: #16a36a;
        }

        .orange {
            background: #ff9f43;
        }

        .gray {
            background: #606779;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 9px;
        }

        input, select {
            width: 100%;
            padding: 14px;
            border-radius: 8px;
            border: 1px solid #39445b;
            background: #0b1020;
            color: white;
            outline: none;
        }

        input:focus, select:focus {
            border-color: #ff9f43;
        }

        .summary {
            background: #0b1020;
            padding: 22px;
            border-radius: 10px;
            margin-top: 25px;
            line-height: 2;
        }

        .price {
            color: #ff9f43;
            font-size: 25px;
            font-weight: bold;
        }

        .submit {
            width: 100%;
            padding: 16px;
            background: #ff9f43;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 25px;
        }

        .submit:hover {
            background: #ffc078;
        }

        .error {
            color: #ff7777;
            font-size: 13px;
            margin-top: 7px;
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #aeb8ca;
        }

        @media(max-width: 600px) {
            .card {
                padding: 20px 10px;
            }

            .seat-row {
                gap: 5px;
            }

            .seat {
                width: 30px;
                height: 32px;
                font-size: 11px;
            }

            h1 {
                font-size: 25px;
            }
        }
    </style>
</head>

<body>

<header>
    <div class="logo">CINEMA TIX</div>

    <a href="/detail">
        ← Kembali ke Detail Film
    </a>
</header>

<div class="container">

    <h1>Pilih Kursi Bioskop</h1>

    <p class="subtitle">
        Petualangan Malam |
        Harga tiket Rp45.000 / kursi
    </p>

    <!-- PEMILIHAN KURSI -->

    <div class="card">

        <h2>Pilih Tempat Duduk</h2>

        <div class="screen">
            LAYAR BIOSKOP
        </div>

        <div class="seats" id="seats">
            <!-- Kursi dibuat oleh JavaScript -->
        </div>

        <div class="legend">

            <span>
                <i class="dot green"></i>
                Tersedia
            </span>

            <span>
                <i class="dot orange"></i>
                Dipilih
            </span>

            <span>
                <i class="dot gray"></i>
                Terisi
            </span>

        </div>

    </div>

    <!-- FORM PEMESANAN -->

    <div class="card">

        <h2>Data Pemesan</h2>

        <form action="/summary" method="POST" id="bookingForm">

            @csrf

            <input type="hidden"
                name="film"
                value="Petualangan Malam">
                @error('kursi')
    <p class="error">{{ $message }}</p>
@enderror

            <input type="hidden"
                name="kursi"
                id="seatInput">

            <div class="form-group">

                <label>Nama Lengkap</label>

                <input
                    type="text"
                    name="nama"
                    placeholder="Masukkan nama lengkap"
                    minlength="3"
                    maxlength="100"
                    value="{{ old('nama') }}"
                    required>

                @error('nama')
                    <p class="error">{{ $message }}</p>
                @enderror

            </div>

            <div class="form-group">

                <label>Email</label>

                <input
                    type="email"
                    name="email"
                    placeholder="contoh@email.com"
                    value="{{ old('email') }}"
                    required>

                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror

            </div>

            <div class="form-group">

                <label>Nomor Telepon</label>

                <input
                    type="tel"
                    name="telepon"
                    placeholder="08xxxxxxxxxx"
                    pattern="[0-9]{10,15}"
                    value="{{ old('telepon') }}"
                    required>

                @error('telepon')
                    <p class="error">{{ $message }}</p>
                @enderror

            </div>

            <div class="form-group">

                <label>Tanggal Menonton</label>

                <input
                    type="date"
                    name="tanggal"
                    id="tanggal"
                    value="{{ old('tanggal') }}"
                    required>

                @error('tanggal')
                    <p class="error">{{ $message }}</p>
                @enderror

            </div>

            <div class="form-group">

                <label>Jadwal Tayang</label>

                <select name="jadwal" required>

                    <option value="">Pilih Jadwal</option>

                    <option value="10:00 WIB">
                        10:00 WIB
                    </option>

                    <option value="13:00 WIB">
                        13:00 WIB
                    </option>

                    <option value="16:00 WIB">
                        16:00 WIB
                    </option>

                    <option value="19:00 WIB">
                        19:00 WIB
                    </option>

                </select>

                @error('jadwal')
                    <p class="error">{{ $message }}</p>
                @enderror

            </div>

            <!-- RINGKASAN -->

            <div class="summary">

                <h3>Ringkasan Tiket</h3>

                <p>
                    Kursi:
                    <strong id="selectedSeats">
                        Belum dipilih
                    </strong>
                </p>

                <p>
                    Jumlah tiket:
                    <strong id="quantity">0</strong>
                </p>

                <p>
                    Harga satu tiket:
                    Rp45.000
                </p>

                <p class="price" id="total">
                    Rp0
                </p>

            </div>

            <button type="submit" class="submit">
                Lanjutkan Pemesanan
            </button>

        </form>

    </div>

</div>

<footer>
    &copy; 2026 CINEMA TIX
    - Sistem Pemesanan Tiket Bioskop
</footer>

<script>

    const harga = 45000;

    const rows = ['A', 'B', 'C', 'D', 'E'];

    const occupied = [
        'A3',
        'A4',
        'B5',
        'C2',
        'D6'
    ];

    let selected = [];

    const seatsContainer =
        document.getElementById('seats');

    // MEMBUAT KURSI OTOMATIS

    rows.forEach(row => {

        const rowDiv =
            document.createElement('div');

        rowDiv.className = 'seat-row';

        const label =
            document.createElement('span');

        label.className = 'row-label';

        label.textContent = row;

        rowDiv.appendChild(label);

        for (let i = 1; i <= 8; i++) {

            const code = row + i;

            const button =
                document.createElement('button');

            button.type = 'button';

            button.className = 'seat';

            button.textContent = i;

            if (occupied.includes(code)) {

                button.classList.add('occupied');

                button.disabled = true;

            }

            button.addEventListener('click', () => {

                if (selected.includes(code)) {

                    selected = selected.filter(
                        seat => seat !== code
                    );

                    button.classList.remove('selected');

                } else {

                    if (selected.length >= 6) {

                        alert(
                            'Maksimal pemesanan 6 kursi!'
                        );

                        return;

                    }

                    selected.push(code);

                    button.classList.add('selected');

                }

                updateSummary();

            });

            rowDiv.appendChild(button);

        }

        seatsContainer.appendChild(rowDiv);

    });

    // MENGHITUNG TOTAL HARGA

    function updateSummary() {

        selected.sort();

        const total = selected.length * harga;

        document.getElementById(
            'selectedSeats'
        ).textContent = selected.length
            ? selected.join(', ')
            : 'Belum dipilih';

        document.getElementById(
            'quantity'
        ).textContent = selected.length;

        document.getElementById(
            'total'
        ).textContent =
            'Rp' + total.toLocaleString('id-ID');

        document.getElementById(
            'seatInput'
        ).value = selected.join(',');

    }

    // TANGGAL MINIMAL HARI INI

    document.getElementById(
        'tanggal'
    ).min = new Date().toLocaleDateString('en-CA');

    // VALIDASI SEBELUM FORM DIKIRIM

    document.getElementById(
        'bookingForm'
    ).addEventListener('submit', function(e) {

        if (selected.length === 0) {

            e.preventDefault();

            alert(
                'Silakan pilih minimal satu kursi!'
            );

        }

    });

</script>

</body>
</html>
