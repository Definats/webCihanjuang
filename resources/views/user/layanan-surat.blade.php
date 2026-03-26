<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Layanan Surat</title>
    <link rel="stylesheet" href="{{ asset('css/dashbord.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profil-kecamatan.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profil-desa.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layanan-surat.css') }}">
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

<!-- GRID -->
<section class="layanan-grid">

@for ($i = 0; $i < 11; $i++)
<div class="layanan-card">
    <img src="{{ asset('images/desa.jpg') }}" class="card-img">

    <div class="card-body">
        <h3>Surat Pengantar</h3>
        <p>
            Surat pengantar adalah surat resmi yang berfungsi sebagai
            pengantar administrasi kependudukan dari pemerintah desa
            kepada instansi terkait.
        </p>

        <a href="{{ route('pengajuan.surat') }}" class="btn-ajukan">
            Ajukan Surat
        </a>
    </div>
</div>
@endfor
</section>
<script>
//MENU
function toggleMenu() {
    document.querySelector('.nav-menu').classList.toggle('show');
}

document.querySelector('.dropdown-toggle').addEventListener('click', function (e) {
    e.preventDefault();
    this.parentElement.classList.toggle('active');
});
document.addEventListener("DOMContentLoaded", function () {

// ANIMASI CARD
const cards = document.querySelectorAll('.layanan-card');

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        }
    });
});

    cards.forEach(card => observer.observe(card));

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