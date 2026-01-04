<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Kecamatan</title>

    <link rel="stylesheet" href="{{ asset('css/dashbord.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profil-kecamatan.css') }}">
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
                    <a href="{{ route('profil.kecamatan') }}">Profil Kecamatan</a>
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
<div class="navbar-spacer"></div>

<!-- ================= HEADER PROFIL ================= -->
<section class="profil-header">
    <div class="profil-card">
        <div class="foto">
            <img src="{{ asset('images/camat.png') }}" alt="Camat Cihanjuang">
        </div>

        <div class="info">
            <h4>KEPALA KECAMATAN CIHANJUANG</h4>
            <h2>BAPAK AGUS</h2>
            <p class="sambutan">
                Assalamu’alaikum warahmatullahi wabarakatuh.  
                Selamat datang di website resmi Kecamatan Cihanjuang sebagai
                sarana informasi, komunikasi, dan pelayanan kepada masyarakat.
            </p>
        </div>
    </div>
</section>

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

<!-- ================= VISI MISI ================= -->
<section class="visi-misi">
    <div class="box">
        <h3>Visi Misi</h3>

        <h4>Visi</h4>
        <p>
            Masyarakat Desa Cihanjuang yang Mandiri, Aman, Sejahtera dan Adil
            berlandaskan iman dan taqwa
        </p>

        <h4>Misi</h4>
        <ol>
            <li>Mewujudkan masyarakat yang berakhlak mulia, bermoral, beretika berbudaya dan beradab berlandaskan keimanan;</li>
            <li>Mewujudkan struktur ekonomi yang kuat melalui pengembangan kewirausahaan;</li>
            <li>Meningkatkan kualitas dan produktivitas sumber daya manusia;</li>
            <li>Meningkatkan peranan perempuan dan pemuda dalam pembangunan;</li>
            <li>Revitalisasi potensi pertanian, peternakan dan lingkungan hidup;</li>
            <li>Meningkatkan infrastruktur dasar dan fasilitas kesehatan;</li>
            <li>Menciptakan situasi keamanan yang kondusif;</li>
            <li>Meningkatkan kualitas pelayanan publik.</li>
        </ol>
    </div>
</section>

<!-- ================= FOOTER ================= -->
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

</body>
</html>