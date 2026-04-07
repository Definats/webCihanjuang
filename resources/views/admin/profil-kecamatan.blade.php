<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Kecamatan</title>

    <!-- CSS -->
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
                    <li class="active">
                        <a href="{{ route('admin.profil.kecamatan') }}">Profil Kecamatan</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.visi-misi.index') }}">Visi Misi</a>
                    </li>
                    <li>Tentang Desa</li>
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

    <!-- MAIN CONTENT -->
    <div class="main">

        <h2 class="title">Profil Kecamatan</h2>

        <div class="content-wrapper">

            <!-- FORM -->
            <div class="card form-card">
                <form method="POST" action="{{ url('/admin/profil-kecamatan') }}" enctype="multipart/form-data">
                    @csrf

                    <label>Jabatan:</label>
                    <input type="text" name="jabatan" value="{{ $data->jabatan ?? '' }}">

                    <label>Nama:</label>
                    <input type="text" name="nama" value="{{ $data->nama ?? '' }}">

                    <label>Deskripsi:</label>
                    <textarea name="deskripsi">{{ $data->deskripsi ?? '' }}</textarea>

                    <label>Upload Foto:</label>
                    <div class="upload-box">
                        <input type="file" name="foto">
                    </div>

                    <button type="submit" class="btn">Upload</button>
                </form>
            </div>

            <!-- HASIL -->
            <div class="card result-card">
                <div class="result-content">

                <div class="result-text">
                    <div class="row">
                        <span>Jabatan</span>
                        <p>{{ $data->jabatan ?? '-' }}</p>
                    </div>

                    <div class="row">
                        <span>Nama</span>
                        <p>{{ $data->nama ?? '-' }}</p>
                    </div>

                    <div class="row">
                        <span>Deskripsi</span>
                        <p>{{ $data->deskripsi ?? '-' }}</p>
                    </div>
                </div>
                    <div class="result-image">
                        <img src="{{ $data && $data->foto ? asset('uploads/'.$data->foto) : asset('images/camat.png') }}">
                    </div>

                </div>
            </div>

        </div>

    </div>

</div>

</body>
</html>