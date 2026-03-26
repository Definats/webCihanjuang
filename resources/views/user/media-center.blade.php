<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Center</title>
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashbord.css') }}">
</head>
<body>

<!-- NAVBAR -->
<header class="navbar">
    <div class="nav-container">
        <div class="logo">
            <a href="{{ route('dashboard') }}" class="logo-link">
                <img src="{{ asset('images/logocihanjuang.png') }}" alt="Logo Desa">
                <div>
                    <strong>Desa Cihanjuang</strong><br>
                    <small>Kabupaten Bandung Barat</small>
                </div>
            </a>
        </div>

        <nav class="nav-menu">
            <div class="dropdown">
                <a href="#" class="dropdown-toggle">
                    Profil <span class="arrow">▾</span>
                </a>
                <div class="dropdown-menu">
                    <a href="{{ route('profil.kecamatan') }}">Profil Kecamatan</a>
                    <a href="{{ route('profil.desa') }}" class="active">Profil Desa</a>
                </div>
            </div>

            <a href="{{ route('infografis') }}">Infografis</a>
            <a href="{{ route('media') }}">Media Center</a>
            <a href="{{ route('layanan.surat') }}">Layanan Surat</a>
            <a href="{{ route('pengajuan.surat') }}">Pengajuan Surat</a>
        </nav>

        <!-- ICON MENU -->
        <div class="menu-icon" onclick="toggleMenu()">☰</div>
    </div>
</header>

<!-- CONTAINER -->
<div class="container">

    <!-- SEARCH -->
    <div class="top-bar">
        <div class="search-box">
            <input type="text" placeholder="Search">
        </div>

        <div class="filter">
            ☰
        </div>
    </div>

    <!-- CARD LIST -->
    <div class="grid">

        <!-- CARD -->
        <div class="card">
            <img src="images/sawah.jpg" alt="">
            <div class="content">
                <span>12 Desember 2025</span>
                <p>
                    Cihanjuang dikenal sebagai sentra penghasil kebun dan
                    pertanian yang dapat mensuplai bukan hanya daerah Bandung saja
                    tetapi, Jakarta dan daerah perbatasan Jawa Tengah.
                </p>
                <button>Lihat</button>
            </div>
        </div>

        <!-- DUPLICATE -->
        <div class="card">
            <img src="images/sawah.jpg" alt="">
            <div class="content">
                <span>12 Desember 2025</span>
                <p>
                    Cihanjuang dikenal sebagai sentra penghasil kebun dan
                    pertanian yang dapat mensuplai bukan hanya daerah Bandung saja
                    tetapi, Jakarta dan daerah perbatasan Jawa Tengah.
                </p>
                <button>Lihat</button>
            </div>
        </div>

        <div class="card">
            <img src="images/sawah.jpg" alt="">
            <div class="content">
                <span>12 Desember 2025</span>
                <p>
                    Cihanjuang dikenal sebagai sentra penghasil kebun dan
                    pertanian yang dapat mensuplai bukan hanya daerah Bandung saja
                    tetapi, Jakarta dan daerah perbatasan Jawa Tengah.
                </p>
                <button>Lihat</button>
            </div>
        </div>

        <div class="card">
            <img src="images/sawah.jpg" alt="">
            <div class="content">
                <span>12 Desember 2025</span>
                <p>
                    Cihanjuang dikenal sebagai sentra penghasil kebun dan
                    pertanian yang dapat mensuplai bukan hanya daerah Bandung saja
                    tetapi, Jakarta dan daerah perbatasan Jawa Tengah.
                </p>
                <button>Lihat</button>
            </div>
        </div>

    </div>

    <!-- PAGINATION -->
    <div class="pagination">
        <span>Halaman 1 dari 5</span>
        <div class="page-btn">
            <button>Awal</button>
            <button class="active">1</button>
            <button>2</button>
            <button>3</button>
            <button>Akhir</button>
        </div>
    </div>
</div>
<!-- FOOTER -->
<footer>
    <div class="footer-content">
        <div class="footer-left">
            <img src="{{ asset('images/logocihanjuang.png') }}" alt="Logo Desa">
            <div class="footer-text">
                <h3>Desa Cihanjuang</h3>
                <p>Situs Resmi Desa Cihanjuang</p>
                <p>Jl. Cihanjuang No.135A Bandung Barat</p>
            </div>
        </div>

        <div class="social">
            <img src="{{ asset('images/ig.png') }}" alt="Instagram">
            <img src="{{ asset('images/yt.png') }}" alt="YouTube">
            <img src="{{ asset('images/yt.png') }}" alt="Whatsapp">
        </div>
    </div>

    <p class="footer-copy">
        © 2025 Layanan Informasi Desa Cihanjuang
    </p>
</footer>
<script>
    //MENU
function toggleMenu() {
    document.querySelector('.nav-menu').classList.toggle('show');
}

document.querySelector('.dropdown-toggle').addEventListener('click', function (e) {
    e.preventDefault();
    this.parentElement.classList.toggle('active');
});
//EFECK CLIK CARD
document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('click', () => {
        card.classList.toggle('active');
    });
});

//EFEK TOMBOL
document.querySelectorAll('.page-btn button').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.page-btn button')
        .forEach(b => b.classList.remove('active'));

        btn.classList.add('active');
    });

// CLOSE DROPDOWN KALAU KLIK LUAR
window.addEventListener('click', function(e) {
    const dropdown = document.querySelector('.dropdown');
        if (!dropdown.contains(e.target)) {
            dropdown.classList.remove('active');
        }
    });
});
</script>
</body>
</html>