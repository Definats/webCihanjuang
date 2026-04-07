<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="{{ asset('css/dashbord.admin.css') }}">
</head>
<body>

<div class="container">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="logo">
            <h2>Desa Cihanjuang</h2>
            <p>Admin</p>
        </div>

        <ul class="menu">
            <li class="active">🏠 Dashboard</li>
            <li class="active">
                <span class="menu-title">👤 Profile</span>
                <ul class="submenu">
                    <li class="active">
                        <a href="{{ route('admin.profil.kecamatan') }}">Profil Kecamatan</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.visi-misi.index') }}">Visi Misi</a>
                    </li>
                    <li>
                        Tentang Desa
                    </li>
                </ul>
            </li>
            <li>📊 Infografis</li>
            <li>🖼️ Media Center</li>
            <li>📄 Pengajuan Surat</li>
            <li>👥 Data Penduduk</li>
            <li>📌 Data Kriteria</li>
            <li>📝 Penilaian</li>
            <li>📈 Perhitungan</li>
            <li>🏆 Hasil & Rangking</li>
        </ul>
    </div>

    <!-- MAIN -->
    <div class="main">

        <!-- TOPBAR -->
        <div class="topbar">
            <div class="right">
                <span>⚙️</span>
                <span>🔔</span>

                <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn-logout">Logout</button>
            </form>
            </div>
        </div>

        <!-- TITLE -->
        <div class="title">
            <h3>🏠 DASHBOARD</h3>
        </div>

        <!-- GARIS -->
        <div class="line"></div>

        <!-- CARDS -->
        <div class="cards">
            <div class="card">Bantuan Sosial</div>
            <div class="card">Pendidikan</div>
            <div class="card">Rumah Layak Huni</div>
        </div>

        <!-- BOX BESAR -->
        <div class="big-box"></div>

    </div>
</div>

</body>
</html>