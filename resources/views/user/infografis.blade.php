<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Infografis</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/infografis.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashbord.css') }}">
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

<!-- SEARCH -->
<div class="container mt-4">
    <div class="search-box d-flex align-items-center">
        <input type="text" placeholder="Search">
    </div>
</div>

<!-- GRID INFOGRAFIS -->
<div class="container mt-5">
    <div class="row g-4">

        @for ($i = 0; $i < 6; $i++)
        <div class="col-md-6 col-lg-4">
            <div class="info-card">
                <img src="{{ asset('images/desa.jpg') }}" class="img-fluid">

                <div class="card-content text-center">
                    <h5>Back To Scool</h5>
                    <p>12 Desember 2025</p>
                </div>
            </div>
        </div>
        @endfor

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
function toggleMenu() {
    document.querySelector('.nav-menu').classList.toggle('show');
}

document.querySelector('.dropdown-toggle').addEventListener('click', function (e) {
    e.preventDefault();
    this.parentElement.classList.toggle('active');
});
document.addEventListener("DOMContentLoaded", function () {

const cards = document.querySelectorAll('.info-card');

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
         }
    });
});

cards.forEach(card => observer.observe(card));

// KLIK LUAR NUTUP
window.addEventListener('click', function(e) {
    const dropdown = document.querySelector('.dropdown');
        if (dropdown && !dropdown.contains(e.target)) {
            dropdown.classList.remove('active');
        }
    });
});
</script>
</body>
</html>