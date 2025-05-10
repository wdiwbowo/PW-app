<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Besar dengan Efek Gelombang</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
    <style>
        /* Navbar */
        .navbar {
            background: #ffffff;
            padding: 25px 0; /* Ukuran navbar lebih besar */
            position: fixed;
            top: -10px; /* Memotong background */
            left: 0;
            width: 100%;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2); /* Efek bayangan lebih smooth */
            z-index: 1000;
        }

        /* Efek Gelombang */
        .wave {
            position: absolute;
            bottom: -25px;
            left: 0;
            width: 100%;
            height: 40px;
            background: url('https://www.svgrepo.com/show/20817/wave.svg') repeat-x;
            animation: waveMove 3s linear infinite;
        }

        @keyframes waveMove {
            from {
                background-position-x: 0;
            }
            to {
                background-position-x: 100px;
            }
        }

        /* Navbar Brand */
        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .navbar-brand img {
            height: 50px; /* Logo lebih besar */
        }

        .navbar-brand h1 {
            font-size: 24px;
            margin: 0;
            font-weight: bold;
            color: #000;
        }

        /* Navbar Link */
        .nav-link {
            font-size: 20px; /* Teks lebih besar */
            font-weight: bold;
            color: #000000 !important;
            margin: 0 15px;
            transition: color 0.3s, transform 0.3s;
        }

        .nav-link:hover {
            color: #007bff !important;
            transform: translateY(-4px);
        }

        /* Media Query untuk Mobile */
        @media (max-width: 992px) {
            .navbar {
                padding: 15px 0; /* Sedikit lebih kecil di mobile */
            }

            .navbar-collapse {
                background: #ffffff;
                padding: 10px;
            }

            .wave {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
<<<<<<< HEAD
                <img src="images/mm.jpg" alt="Logo">
                <h1>PT Mulia Mandiri</h1>
=======
                <img src="https://linktr.ee/og/image/perunggu_.jpg" alt="Logo">
                <h1>PT Mulya Mandiri</h1>
>>>>>>> 4239ba90f84787787b160ba182be659b4105caf5
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
    <li class="nav-item">
        <a class="nav-link" href="/">Beranda</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/aboutus">Tentang Kami</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="produkDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Produk
        </a>
        <ul class="dropdown-menu" aria-labelledby="produkDropdown">
            <li><a class="dropdown-item" href="/produk">Overview Produk</a></li>
            <li><a class="dropdown-item" href="/spesifikasi">Spesifikasi Produk</a></li>
            <li><a class="dropdown-item" href="/sertifikasi">Sertifikasi Produk</a></li>
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="produkDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Galeri
        </a>
        <ul class="dropdown-menu" aria-labelledby="produkDropdown">
            <li><a class="dropdown-item" href="/image">Pabrik & Workshop</a></li>
            <li><a class="dropdown-item" href="/pengiriman">Pengepakan & Pengiriman</a></li>
            <li><a class="dropdown-item" href="/material">Material</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/kontak">Kontak</a>
    </li>
</ul>

            </div>
        </div>
        <div class="wave"></div>
    </nav>
</body>
</html>
