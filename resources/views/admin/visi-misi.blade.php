<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Visi & Misi</title>

    <link rel="stylesheet" href="{{ asset('css/dashbord.admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin-profil.css') }}">
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
            <li>
                <a href="{{ route('admin.dashboard') }}">🏠 Dashboard</a>
            </li>

            <li class="active">
                <span class="menu-title">👤 Profile</span>
                <ul class="submenu">
                    <li>
                        <a href="{{ route('admin.profil.kecamatan') }}">Profil Kecamatan</a>
                    </li>
                    <li class="active">
                        <a href="{{ route('admin.visi-misi.index') }}">Visi Misi</a>                    
                    </li>
                    <li>
                        Tentang Desa
                    </li>
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

        <h2 class="title">Visi & Misi</h2>

        <div class="content-wrapper">

            <!-- FORM -->
            <div class="card form-card">
            <form action="{{ route('admin.visi-misi.store') }}" method="POST">
                @csrf

                <label for="visi">Visi</label>
                <textarea name="visi" id="visi" rows="3" placeholder="Masukkan visi desa">{{ $data->visi ?? '' }}</textarea>

                <label for="misi">Misi</label>
                <textarea name="misi" id="misi" rows="5" placeholder="Masukkan misi desa">{{ $data->misi ?? '' }}</textarea>

                <button type="submit">Simpan</button>
            </form>
        </div>

            <!-- HASIL -->
            <div class="card result-card">
                <div class="result-text">

                    <div class="box">
                        <h4>Visi</h4>
                        <p>{{ $data->visi ?? 'Belum ada visi' }}</p>
                    </div>

                    <div class="box">
                        <h4>Misi</h4>
                        <p>{{ $data->misi ?? 'Belum ada misi' }}</p>
                    </div>

                </div>
            </div>

        </div>

    </div>

</div>

</body>
</html>