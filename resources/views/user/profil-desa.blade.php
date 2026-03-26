<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Desa</title>

    <link rel="stylesheet" href="{{ asset('css/dashbord.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profil-kecamatan.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profil-desa.css') }}">
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

        <nav class="nav-menu" id="navMenu">
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
            <a href="{{ route('pengajuan.surat') }}">Pengajuan </a>
        </nav>

        <!-- ICON MENU -->
        <div class="menu-icon" onclick="toggleMenu()">☰</div>
    </div>
</header>
<!-- PROFIL DESA -->
<main class="profil-desa">

<!-- Tentang Desa -->
<section class="tentang-desa">
    <div class="tentang-card">
        <div class="tentang-img">
        <img src="{{ asset('images/desa.jpg') }}" alt="Desa Cihanjuang">
    </div>

    <div class="tentang-text">
        <h3>Tentang Desa</h3>
            <p>
                Cihanjuang dikenal sebagai sentra penghasil kelapa
                dan pertanian yang dapat mensuplai bahan baku
                daerah Bandung saja tetapi Jakarta dan daerah
                sekitarnya juga. Terdapat beberapa daerah
                perbukitan, sungai, sawah, dan tanah-tanah subur.
                Nama Cihanjuang berasal dari kata <b>“ci”</b>
                yang berarti sungai dan <b>“hanjuang”</b> yaitu
                tanaman yang banyak tumbuh di wilayah ini.
            </p>
        </div>
    </div>
</section>

<!-- Lambang Desa -->
<section class="tentang-desa lambang-section">
    <div class="tentang-card">
        <div class="tentang-img">
            <img src="{{ asset('images/logocihanjuang.png') }}" alt="Lambang Desa">
        </div>

        <div class="tentang-text">
            <h3>Lambang Desa</h3>
            <p>
                Lambang Desa Cihanjuang melambangkan persatuan,
                kesejahteraan, dan semangat gotong royong masyarakat.
                Bentuk dan warna pada lambang mencerminkan
                kekayaan alam, budaya, serta nilai luhur yang
                dijunjung tinggi oleh masyarakat Desa Cihanjuang.
            </p>
        </div>
    </div>
</section>

</main>

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
function toggleMenu() {
    document.querySelector('.nav-menu').classList.toggle('show');
}

document.addEventListener('DOMContentLoaded', function () {
    const dropdownToggle = document.querySelector('.dropdown-toggle');

dropdownToggle.addEventListener('click', function (e) {
    e.preventDefault();
        this.parentElement.classList.toggle('active');
    });
});
</script>
</body>
</html>