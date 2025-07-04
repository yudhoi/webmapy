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
                    <img src="images/1.png" alt="Peta Wisata">
                    <div class="map-card-content">
                        <h4>Peta Lokasi Persampahan</h4>
                        <p>Peta interaktif yang menampilkan tempat-tempat wisata populer, restoran, dan akomodasi di Bali.</p>
                        <a href="persampahan.html">Lihat Peta</a>
                    </div>
                </div>

                <div class="map-card">
                    <img src="images/2.png" alt="Peta Properti">
                    <div class="map-card-content">
                        <h4>Peta Pelanggan Persampahan</h4>
                        <p>Temukan properti dijual atau disewa di berbagai lokasi dengan filter harga dan tipe properti.</p>
                        <a href="pelanggan.html">Lihat Peta</a>
                    </div>
                </div>

                <div class="map-card">
                    <img src="images/3.png" alt="Peta Kampus">
                    <div class="map-card-content">
                        <h4>Peta Kampus Universitas Gadjah Mada</h4>
                        <p>Peta navigasi untuk mahasiswa dan pengunjung untuk menemukan gedung dan fasilitas kampus.</p>
                        <a href="opak.html">Lihat Peta</a>
                    </div>
                </div>

                <div class="map-card">
                    <img src="images/4.png" alt="Peta Komunitas">
                    <div class="map-card-content">
                        <h4>Peta Komunitas Lokal Bandung</h4>
                        <p>Direktori visual komunitas dan organisasi non-profit di area Bandung.</p>
                        <a href="iklh.html">Lihat Peta</a>
                    </div>
                </div>

                <div class="map-card">
                    <img src="images/5.png" alt="Peta Acara">
                    <div class="map-card-content">
                        <h4>Peta Festival Musik Jakarta</h4>
                        <p>Jadwal dan lokasi panggung, food court, dan fasilitas di festival musik.</p>
                        <a href="#">Lihat Peta</a>
                    </div>
                </div>

                <div class="map-card">
                    <img src="images/6.png" alt="Peta Sejarah">
                    <div class="map-card-content">
                        <h4>Peta Jalur Sejarah Kota Lama Semarang</h4>
                        <p>Telusuri titik-titik bersejarah dengan informasi dan gambar pendukung.</p>
                        <a href="#">Lihat Peta</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>