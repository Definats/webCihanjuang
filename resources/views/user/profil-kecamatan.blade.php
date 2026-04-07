<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Kecamatan</title>

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
<div class="navbar-spacer"></div>

<!-- HEADER PROFIL -->
<section class="profil-header">
    <div class="profil-card">
        <div class="foto">
            <img src="{{ $data && $data->foto ? asset('uploads/'.$data->foto) : asset('images/camat.png') }}">
        </div>

        <div class="info">
            <h4>{{ $data->jabatan ?? '-' }}</h4>
            <h2>{{ $data->nama ?? '-' }}</h2>
            <p class="sambutan">
                {{ $data->deskripsi ?? '-' }}
            </p>
        </div>
    </div>
</section>

<!-- VISI MISI -->
<section class="visi-misi">
    <div class="box">
        <h3>Visi Misi</h3>

        <h4>Visi</h4>
        <p>{{ $visiMisi->visi ?? '-' }}</p>

        <h4>Misi</h4>
        <ol>
            @if($visiMisi && $visiMisi->misi)
                @foreach(explode(';', $visiMisi->misi) as $item)
                    <li>{{ trim($item) }}</li>
                @endforeach
            @else
                <li>-</li>
            @endif
        </ol>
    </div>
</section>

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