<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pengajuan Surat</title>
    <link rel="stylesheet" href="{{ asset('css/dashbord.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profil-kecamatan.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profil-desa.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pengajuan-surat.css') }}">
    
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

<!-- FORM -->
<section class="pengajuan-wrapper">
    <h2>Pengajuan Surat</h2>

    <form class="pengajuan-form" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Nama Lengkap:</label>
        <input type="text" name="nama" placeholder="Masukkan nama lengkap">

        <label>NIK:</label>
        <input type="text" name="nik" placeholder="Masukkan NIK">

        <label>Alamat:</label>
        <input type="text" name="alamat" placeholder="Masukkan alamat">

        <label>Keperluan Surat</label>
        <input type="text" name="keperluan" placeholder="Masukkan keperluan surat">

        <label>Upload KTP:</label>
        <div class="upload-box">
            <input type="file" name="ktp">
            <span>⬆</span>
        </div>

        <button type="submit" class="btn-submit">
            Mengupload Surat
        </button>
    </form>
</section>

<!-- FOOTER -->
<footer class="footer">
    <div class="footer-content">
        <div>
            <img src="{{ asset('images/logocihanjuang.png') }}">
            <p><b>Desa Cihanjuang</b><br>
            Kabupaten Bandung Barat</p>

            <p>
                Kantor Kecamatan:<br>
                Jl. Cihanjuang No.135A 40559<br>
                Bandung Barat<br>
                Kecamatan Parongpong
            </p>
        </div>

        <div class="social">
            <img src="{{ asset('images/wa.png') }}">
            <img src="{{ asset('images/ig.png') }}">
            <img src="{{ asset('images/yt.png') }}">
        </div>
    </div>

    <p class="copy">
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
document.addEventListener("DOMContentLoaded", function () {

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
