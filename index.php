<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebGIS Dinas Lingkungan Hidup Kabupaten Sleman</title>
    <link href="#" rel="stylesheet">
    <style>
        /* --- CSS Umum --- */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color:rgb(255, 255, 255); /* Warna latar belakang lembut */
            color: #333;
            line-height: 1;

              /* Penambahan untuk background gambar */
             background-image: url('images/background.png'); /* Lokasi gambar background Anda */
             background-repeat: no-repeat; /* Gambar tidak diulang */
             background-size: cover; /* Gambar mencakup seluruh area */
             background-attachment: fixed; /* Gambar tetap saat scroll */
             opacity: 0.9; // Atur tingkat transparansi di sini (0.0 - 1.0)
            /* Jika gambar 'background.png' tidak transparan, Anda bisa coba overlay atau rgba background */
            /* Contoh overlay: */
            /* &::before {
                content: "";
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-image: url('images/background.png');
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
                opacity: 0.2; // Atur tingkat transparansi di sini (0.0 - 1.0)
                z-index: -1;
        }*/

        }
        .container {
            max-width: 1200px; /* Lebar maksimal konten */
            margin: 0 auto;
            padding: 5px;
        }
        .clearfix::after { /* Untuk membersihkan float */
            content: "";
            clear: both;
            display: table;
        }

        /* --- Hero Section --- */
        .hero {
            text-align: center;
            padding: 20px 20px;
            background-color:rgb(255, 255, 255); /* Latar belakang hero yang lebih terang */
            margin-bottom: 5px;
            border-bottom: 1px solid #dcdcdc;
        }

        /* Container baru untuk logo dan judul */
        .hero-title-container {
            display: flex; /* Menggunakan Flexbox untuk penataan sejajar */
            align-items: center; /* Menyelaraskan item secara vertikal di tengah */
            justify-content: center; /* Menyelaraskan item secara horizontal di tengah */
            gap: 15px; /* Jarak antara logo dan judul */
            margin-bottom: 5px; /* Jarak antara container judul dan paragraf */
        }

        .hero .hero-logo { /* Styling untuk logo di hero */
            max-width: 50px; /* Atur ukuran maksimum logo */
            height: auto;
            margin-bottom: 20px; /* Jarak antara logo dan judul */
        }
        .hero h1 {
            font-size: 1.5em;
            margin-bottom: 5px;
            color: #2c3e50;
            font-weight: 700;
        }
        .hero p {
            font-size: 1em;
            color: #555;
            max-width: 800px;
            margin: 0 auto;
        }

        /* --- Map Examples Grid --- */
        .map-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* Responsif grid */
            gap: 10px; /* Jarak antar kartu */
            margin-bottom: 50px; /* Memberi ruang di bawah grid */
        }
        .map-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08); /* Bayangan kartu */
            overflow: hidden; /* Pastikan gambar tidak keluar dari border-radius */
            transition: transform 0.3s ease;
        }
        .map-card:hover {
            transform: translateY(-5px); /* Efek angkat saat hover */
        }
        .map-card img {
            width: 100%;
            height: 200px; /* Tinggi gambar tetap */
            object-fit: cover; /* Pastikan gambar mengisi area tanpa terdistorsi */
            display: block;
        }
        .map-card-content {
            padding: 20px;
        }
        .map-card-content h4 {
            font-size: 1.4em;
            margin-top: 0;
            margin-bottom: 10px;
            color: #2c3e50;
            font-weight: 600;
        }
        .map-card-content p {
            font-size: 0.95em;
            color: #666;
            margin-bottom: 15px;
        }
        .map-card-content a {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 10px 18px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 0.9em;
            font-weight: 500;
            transition: background-color 0.3s;
        }
        .map-card-content a:hover {
            background-color: #0056b3;
        }

        /* --- Responsivitas --- */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5em;
            }
            .hero p {
                font-size: 1em;
            }
            .map-grid {
                grid-template-columns: 1fr; /* Satu kolom untuk layar kecil */
            }
        }
        @media (max-width: 480px) {
            .hero {
                padding: 40px 15px;
            }
            .hero h1 {
                font-size: 2em;
            }
        }
    </style>
</head>
<body>
    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-title-container">
                    <img src="images/logo.png" alt="Logo Perusahaan" class="hero-logo">
                    <h1>WebGIS Dinas Lingkungan Hidup Kabupaten Sleman</h1>
                </div> 
                <p>Jelajahi lebih lanjut WebGIS Dinas Lingkungan Hidup Kabupaten Sleman untuk memahami data lingkungan hidup dan berkontribusi pada keberlanjutan Sleman</p>
            </div>
        </section>

        <section class="map-examples container">
            <div class="map-grid">
                <div class="map-card">
                    <img src="images/1.png" alt="Peta Persampahan">
                    <div class="map-card-content">
                        <h4>Peta Lokasi Persampahan</h4>
                        <p>Peta interaktif yang menujukan lokasi-lokasi Sarana dan Prasarana Persampahan.</p>
                        <a href="persampahan.html">Lihat Peta</a>
                    </div>
                </div>

                <div class="map-card">
                    <img src="images/2.png" alt="Peta Pelanggan Sampah">
                    <div class="map-card-content">
                        <h4>Peta Pelanggan Persampahan</h4>
                        <p>Sebaran pelanggan penjemputan sampah yang dilayani oleh UPTD Pelayanan Persampahan Kab. Sleman.</p>
                        <a href="pelanggan.html">Lihat Peta</a>
                    </div>
                </div>

                <div class="map-card">
                    <img src="images/4.png" alt="Peta Pemantauan">
                    <div class="map-card-content">
                        <h4>Peta Pemantauan Kualitas Lingkungan</h4>
                        <p>Lokasi pemantauan pengukuran kualitas air di sungai, mataair, embung dan air tanah, serta kualitas udara di wilayah Kab. Sleman tahun 2024.</p>
                        <a href="pantau.html">Lihat Peta</a>
                    </div>
                </div>

                <div class="map-card">
                    <img src="images/3.png" alt="Peta Status Lingkungan Hidup">
                    <div class="map-card-content">
                        <h4>Peta Status Lingkungan Hidup</h4>
                        <p>Peta status daya dukung lingkungan terhadap kebutuhan masyarakat di wilayah Kabupaten Sleman.</p>
                        <a href="status.html">Lihat Peta</a>
                    </div>
                </div>

                <div class="map-card">
                    <img src="images/8.png" alt="Peta Timbulan Sampah">
                    <div class="map-card-content">
                        <h4>Peta Timbulan Sampah di Kapanewon</h4>
                        <p>Tonase timbulan sampah pada tiap-tiap kapanewon di wilayah Kabupaten Sleman.</p>
                        <a href="timbulan.html">Lihat Peta</a>
                    </div>
                </div>

                <div class="map-card">
                    <img src="images/6.png" alt="Peta IPAL">
                    <div class="map-card-content">
                        <h4>Peta Pengelolaan Air Limbah Domestik</h4>
                        <p>Peta pengelolaan air limbah domestik penting untuk perencanaan, identifikasi prioritas penanganan, dan pemantauan lingkungan.</p>
                        <a href="ipal.html">Lihat Peta</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>