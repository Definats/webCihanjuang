<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Cihanjuang</title>
    <link rel="stylesheet" href="{{ asset('css/dashbord.css') }}">
</head>
<body>

<!-- ================= NAVBAR ================= -->
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
                    <a href="#">Profil Kecamatan</a>
                    <a href="#">Profil Desa</a>
                </div>
            </div>

            <a href="#">Infografis</a>
            <a href="#">Media Center</a>
            <a href="#">Layanan Surat</a>
            <a href="#">Pengajuan Surat</a>
        </nav>

        <!-- ICON MENU -->
        <div class="menu-icon" onclick="toggleMenu()">☰</div>
    </div>
</header>
<script>
function toggleMenu() {
    document.querySelector('.nav-menu').classList.toggle('show');
}

document.querySelector('.dropdown-toggle').addEventListener('click', function (e) {
    e.preventDefault();
    this.parentElement.classList.toggle('active');
});
</script>
<!-- ================= HERO ================= -->
<section class="hero">
    <img src="{{ asset('images/postercihanjuang.png') }}" alt="Hero Desa">
</section>

<!-- ================= BERITA ================= -->
<section class="section">
    <div class="section-header">
        <h2>Berita Terbaru</h2>
        <a href="#">Lihat Semua →</a>
    </div>
 <div class="card-grid">
        @for ($i = 0; $i < 3; $i++)
        <div class="card">
            <img src="{{ asset('images/desa.jpg') }}" alt="Berita">
            <h3>Desa Cihanjuang</h3>
            <p class="date">12 Desember 2025</p>
        </div>
        @endfor
    </div>
</section>

<!-- ================= KEGIATAN ================= -->
<section class="section">
    <div class="section-header">
        <h2>Kegiatan Desa</h2>
        <a href="#">Lihat Semua →</a>
    </div>

    <div class="card-grid">
        @for ($i = 0; $i < 3; $i++)
        <div class="card activity">
            <h4>Lomba UKS Jenjang SMP/MTS Tingkat Kabupaten Gresik Tahun 2025</h4>
            <p>📅 3 Desember 2025</p>
            <p>⏰ 10:30 WIB</p>
            <p>📍 Icon Mall Gresik</p>
        </div>
        @endfor
    </div>
</section>

<!-- ================= PETA ================= -->
<section class="section">
    <h2>Peta</h2>
    <div class="map-box"></div>
</section>

<!-- ================= FOOTER ================= -->
<footer>
    <div class="footer-content">
        <div class="footer-left">
            <img src="{{ asset('images/logocihanjuang.png') }}" alt="Logo Desa">
            <div>
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

    <p class="copyright">
        © 2025 Layanan Informasi Desa Cihanjuang
    </p>
</footer>
</body>
</html>