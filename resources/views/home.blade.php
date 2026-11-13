<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CINEMA TIX - Pesan Tiket Bioskop</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --bg: #080d1b;
    --navy: #111a30;
    --card: #17233b;
    --orange: #ff9f43;
    --white: #ffffff;
    --muted: #aab6ca;
}

html {
    scroll-behavior: smooth;
}

body {
    font-family: 'Segoe UI', Arial, sans-serif;
    background: var(--bg);
    color: var(--white);
}

/* NAVBAR */
header {
    background: rgba(17, 26, 48, .96);
    padding: 20px 8%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: sticky;
    top: 0;
    z-index: 100;
    border-bottom: 1px solid #293650;
}

.logo {
    font-size: 27px;
    font-weight: 900;
    color: var(--orange);
    letter-spacing: 1px;
}

.logo span {
    color: white;
}

nav {
    display: flex;
    align-items: center;
    gap: 30px;
}

nav a {
    text-decoration: none;
    color: white;
    font-weight: 600;
    transition: .3s;
}

nav a:hover {
    color: var(--orange);
}

.nav-btn {
    background: var(--orange);
    color: #111 !important;
    padding: 11px 20px;
    border-radius: 8px;
}

/* HERO */
.hero {
    min-height: 480px;
    padding: 75px 8%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 35px;
    background:
        radial-gradient(circle at 80% 30%, #743a78 0%, transparent 35%),
        linear-gradient(120deg, #14213e, #241b43 75%, #46234c);
    overflow: hidden;
}

.hero-content {
    max-width: 650px;
}

.tagline {
    display: inline-block;
    color: var(--orange);
    background: #ff9f4320;
    padding: 9px 16px;
    border-radius: 30px;
    font-size: 13px;
    font-weight: bold;
    margin-bottom: 22px;
}

.hero h1 {
    font-size: clamp(36px, 5vw, 58px);
    line-height: 1.15;
    margin-bottom: 20px;
}

.hero h1 span {
    color: var(--orange);
}

.hero p {
    color: #c5cee0;
    font-size: 17px;
    line-height: 1.8;
    margin-bottom: 30px;
}

.btn {
    display: inline-block;
    background: var(--orange);
    color: #111;
    padding: 15px 26px;
    border-radius: 9px;
    text-decoration: none;
    font-weight: bold;
    transition: .3s;
    border: none;
    cursor: pointer;
}

.btn:hover {
    background: #ffc078;
    transform: translateY(-3px);
    box-shadow: 0 8px 25px #ff9f4340;
}

.hero-art {
    width: 320px;
    height: 340px;
    flex-shrink: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 145px;
    background: linear-gradient(145deg, #ff9f43, #b64d79);
    border-radius: 30px;
    box-shadow: 0 25px 60px #0006;
    transform: rotate(4deg);
}

/* BENEFITS */
.benefits {
    padding: 30px 8%;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    background: #10192c;
}

.benefit {
    display: flex;
    align-items: center;
    gap: 15px;
}

.benefit-icon {
    font-size: 30px;
}

.benefit strong {
    display: block;
    margin-bottom: 5px;
}

.benefit small {
    color: var(--muted);
}

/* MOVIES */
.container {
    padding: 65px 8%;
}

.section-heading {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
    margin-bottom: 30px;
}

.section-heading h2 {
    font-size: 30px;
}

.section-heading p {
    color: var(--muted);
    margin-top: 8px;
}

.search {
    padding: 13px 17px;
    width: 260px;
    background: #17233b;
    border: 1px solid #34425e;
    border-radius: 9px;
    color: white;
    outline: none;
    font-size: 14px;
}

.search:focus {
    border-color: var(--orange);
}

.filters {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
    margin-bottom: 30px;
}

.filter {
    padding: 10px 19px;
    background: #17233b;
    border: 1px solid #34425e;
    border-radius: 30px;
    color: white;
    cursor: pointer;
    transition: .3s;
}

.filter:hover,
.filter.active {
    background: var(--orange);
    color: #111;
    border-color: var(--orange);
}

.movies {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.movie {
    background: var(--card);
    border-radius: 17px;
    overflow: hidden;
    border: 1px solid #293650;
    transition: .35s;
    position: relative;
}

.movie:hover {
    transform: translateY(-9px);
    border-color: var(--orange);
    box-shadow: 0 15px 35px #0005;
}

.poster {
    width: 100%;
    height: 290px;
    overflow: hidden;
    border-radius: 12px 12px 0 0;
    position: relative;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

/* BACKGROUND POSTER 1, 2, DAN 3 MENGGUNAKAN URL INTERNET */
.poster1 {
    background-image: url("https://thumb.wikimedia.org/wikipedia/id/thumb/6/64/Spider-Man_Brand_New_Day-film_poster.jpg/250px-Spider-Man_Brand_New_Day-film_poster.jpg");
}

.poster2 {
    background-image: url("https://i.pinimg.com/236x/47/84/99/4784993d635b36bc0db6b1859a8ed323.jpg");
}

.poster3 {
    background-image: url("https://i.pinimg.com/originals/0d/af/73/0daf73d3471efc7ae0392b9255773ee9.jpg");
}

.poster::after {
    content: "CINEMA TIX";
    position: absolute;
    bottom: 18px;
    left: 20px;
    font-size: 12px;
    font-weight: bold;
    letter-spacing: 3px;
    color: #ffffffaa;
}

.movie-info {
    padding: 22px;
}

.category {
    display: inline-block;
    background: #ff9f4320;
    color: var(--orange);
    font-size: 12px;
    padding: 6px 11px;
    border-radius: 20px;
    margin-bottom: 12px;
}

.movie h3 {
    font-size: 21px;
    margin-bottom: 12px;
}

.movie p {
    color: var(--muted);
    margin-bottom: 12px;
    font-size: 14px;
}

.movie-bottom {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    margin-top: 20px;
}

.price {
    color: var(--orange);
    font-size: 17px;
    font-weight: bold;
}

.movie .btn {
    padding: 11px 16px;
    font-size: 13px;
}

.empty {
    display: none;
    text-align: center;
    color: var(--muted);
    padding: 40px;
}

/* PROMO */
.promo {
    margin: 10px 8% 65px;
    padding: 40px;
    border-radius: 18px;
    background: linear-gradient(110deg, #352052, #1a3154);
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
}

.promo h2 {
    margin-bottom: 12px;
}

.promo p {
    color: #c5cee0;
    line-height: 1.7;
}

/* FOOTER */
footer {
    background: #111a30;
    border-top: 1px solid #293650;
    padding: 40px 8% 20px;
    text-align: center;
}

footer h2 {
    color: var(--orange);
    margin-bottom: 12px;
}

footer p {
    color: var(--muted);
    line-height: 1.8;
}

.footer-bottom {
    border-top: 1px solid #293650;
    margin-top: 25px;
    padding-top: 20px;
    font-size: 13px;
}

/* RESPONSIVE */
@media(max-width: 900px) {
    .hero-art {
        width: 240px;
        height: 270px;
        font-size: 110px;
    }

    .movies {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media(max-width: 650px) {
    header {
        flex-direction: column;
        gap: 20px;
    }

    nav {
        gap: 15px;
        flex-wrap: wrap;
        justify-content: center;
    }

    nav a {
        font-size: 13px;
    }

    .hero {
        flex-direction: column;
        text-align: center;
        padding: 55px 7%;
    }

    .hero-art {
        width: 220px;
        height: 230px;
        font-size: 100px;
    }

    .benefits {
        grid-template-columns: 1fr;
    }

    .movies {
        grid-template-columns: 1fr;
    }

    .section-heading {
        flex-direction: column;
        align-items: flex-start;
    }

    .search {
        width: 100%;
    }

    .promo {
        flex-direction: column;
        text-align: center;
    }
}
</style>
</head>

<body>

<!-- NAVBAR -->
<header>
    <div class="logo">CINEMA <span>TIX.</span></div>
    <nav>
        <a href="/">Beranda</a>
        <a href="#film">Daftar Film</a>
        <a href="#layanan">Layanan</a>
        <a href="#tentang">Tentang</a>
        <a href="#film" class="nav-btn">Pesan Tiket</a>
    </nav>
</header>

<!-- HERO -->
<section class="hero">
    <div class="hero-content">
        <div class="tagline">🎬 BIOSKOP ONLINE CINEMA TIX</div>
        <h1>Nikmati Film <span>Favoritmu!</span></h1>
        <p>
            Rasakan pengalaman menonton yang lebih mudah.
            Pilih film favorit, tentukan jadwal, pilih kursi,
            dan pesan tiket bioskop hanya dalam beberapa langkah.
        </p>
        <a href="#film" class="btn">Jelajahi Film Sekarang →</a>
    </div>
    <div class="hero-art">
    <img src="https://m.media-amazon.com/images/I/61jJDp0V5rL._AC_UF894,1000_QL80_.jpg" alt="Poster Marvel" style="width: 100%; height: 100%; object-fit: cover; border-radius: 25px;">
</div>
</section>

<!-- BENEFITS -->
<section class="benefits" id="layanan">
    <div class="benefit">
        <div class="benefit-icon">🎟️</div>
        <div>
            <strong>Pemesanan Mudah</strong>
            <small>Pesan tiket dengan praktis</small>
        </div>
    </div>
    <div class="benefit">
        <div class="benefit-icon">💺</div>
        <div>
            <strong>Pilih Kursi Sendiri</strong>
            <small>Tentukan posisi tempat duduk</small>
        </div>
    </div>
    <div class="benefit">
        <div class="benefit-icon">📱</div>
        <div>
            <strong>E-Ticket Digital</strong>
            <small>Bukti tiket langsung tersedia</small>
        </div>
    </div>
</section>

<!-- MOVIE CATALOG -->
<section class="container" id="film">
    <div class="section-heading">
        <div>
            <h2>Film Pilihan Hari Ini</h2>
            <p>Temukan film terbaik untuk menemani waktu luangmu.</p>
        </div>
        <input type="text" class="search" id="searchFilm" placeholder="🔍 Cari judul film...">
    </div>

    <div class="filters">
        <button class="filter active" data-category="all">Semua Film</button>
        <button class="filter" data-category="adventure">Adventure</button>
        <button class="filter" data-category="sci-fi">Sci-Fi</button>
        <button class="filter" data-category="fantasy">Fantasy</button>
    </div>

    <div class="movies" id="movieList">

        <!-- FILM 1 -->
        <div class="movie" data-category="adventure">
            <div class="poster poster1"></div>
            <div class="movie-info">
                <span class="category">ADVENTURE</span>
                <h3>Spiderman Brand New Day</h3>
                <p>⭐ 8.8/10 &nbsp; | &nbsp; 145 Menit</p>
                <p>kisah Peter Parker (Tom Holland) yang menjalani hidup sendirian sebagai pahlawan super penuh waktu di Kota New York..</p>
                <div class="movie-bottom">
                    <span class="price">Rp45.000</span>
                    <a href="/detail" class="btn">Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- FILM 2 -->
        <div class="movie" data-category="sci-fi">
            <div class="poster poster2"></div>
            <div class="movie-info">
                <span class="category">SCI-FI</span>
                <h3>Avengers Infinity War</h3>
                <p>⭐ 9.0/10 &nbsp; | &nbsp; 149 Menit</p>
                <p>perjuangan para Avengers dan sekutu mereka (termasuk Guardians of the Galaxy) yang harus bersatu untuk menghentikan .</p>
                <div class="movie-bottom">
                    <span class="price">Rp50.000</span>
                    <a href="/detail" class="btn">Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- FILM 3 -->
        <div class="movie" data-category="fantasy">
            <div class="poster poster3"></div>
            <div class="movie-info">
                <span class="category">FANTASY</span>
                <h3>Avangers End Game</h3>
                <p>⭐ 8.5/10 &nbsp; | &nbsp; 181 Menit</p>
                <p>perjuangan para anggota Avengers yang tersisa untuk membalikkan keadaan setelah Thanos berhasil melenyapkan separuh dari seluruh populasi makhluk hidup di alam semesta menggunakan kekuatan Infinity Stones dalam film Avengers: Infinity War</p>
                <div class="movie-bottom">
                    <span class="price">Rp40.000</span>
                    <a href="/detail" class="btn">Lihat Detail</a>
                </div>
            </div>
        </div>

    </div>

    <div class="empty" id="emptyMessage">
        Film tidak ditemukan. Coba kata kunci lain.
    </div>
</section>

<!-- PROMO -->
<section class="promo">
    <div>
        <h2>🎬 Waktunya Menonton Film Favoritmu!</h2>
        <p>Pilih film, pesan kursi, dan nikmati pengalaman menonton bersama CINEMA TIX.</p>
    </div>
    <a href="#film" class="btn">Pesan Sekarang →</a>
</section>

<!-- FOOTER -->
<footer id="tentang">
    <h2>CINEMA TIX.</h2>
    <p>
        Sistem Pemesanan Tiket Bioskop Online.<br>
        Nikmati pengalaman memesan tiket dengan mudah, cepat, dan praktis.
    </p>
    <div class="footer-bottom">
        &copy; 2026 CINEMA TIX. All Rights Reserved.
    </div>
</footer>

<!-- JAVASCRIPT SEARCH DAN FILTER -->
<script>
const searchInput = document.getElementById('searchFilm');
const movieCards = document.querySelectorAll('.movie');
const filterButtons = document.querySelectorAll('.filter');
const emptyMessage = document.getElementById('emptyMessage');

let selectedCategory = 'all';

function filterMovies() {
    const keyword = searchInput.value.toLowerCase();
    let visibleCount = 0;

    movieCards.forEach(movie => {
        const title = movie.querySelector('h3').textContent.toLowerCase();
        const category = movie.dataset.category;

        const matchesSearch = title.includes(keyword);
        const matchesCategory =
            selectedCategory === 'all' ||
            category === selectedCategory;

        if (matchesSearch && matchesCategory) {
            movie.style.display = 'block';
            visibleCount++;
        } else {
            movie.style.display = 'none';
        }
    });

    emptyMessage.style.display =
        visibleCount === 0 ? 'block' : 'none';
}

searchInput.addEventListener('input', filterMovies);

filterButtons.forEach(button => {
    button.addEventListener('click', () => {
        filterButtons.forEach(item =>
            item.classList.remove('active')
        );

        button.classList.add('active');
        selectedCategory = button.dataset.category;

        filterMovies();
    });
});
</script>

</body>
</html>