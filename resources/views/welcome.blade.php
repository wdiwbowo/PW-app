<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bronjong - Selamat Datang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
.hero-content-wrapper {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 10px;
    margin-left: 50px; /* Sesuaikan posisi dari kiri */
}


    .custom-bg-purple, .custom-bg-white {
        display: inline-block; /* Sesuaikan ukuran background dengan teks */
        padding: 15px 25px; /* Beri jarak di dalam background */
        border-radius: 5px; /* Tambahkan sudut membulat */
        text-align: center;
    }

    .custom-bg-purple {
        background: rgba(41, 34, 64, 0.6);
    }

    .custom-bg-white {
        background: rgba(255, 255, 255, 0.6);
    }
        body {
            font-family: 'Poppins', sans-serif;
        }
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: url('https://kpssteel.com/storage/2022/10/Ukuran-Kawat-Bronjong-yang-Sesuai-SNI-untuk-Beragam-Kebutuhan-KPS-Steel-Distributor-Besi-Jakarta-1024x683.jpg') no-repeat center center/cover;
            color: white;
            position: relative;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 12px 25px;
            font-size: 20px;
            transition: 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .section-title {
            font-weight: 700;
            font-size: 2rem;
            margin-bottom: 20px;
            text-transform: uppercase;
            color: #007bff;
        }
        .feature-icon {
            font-size: 40px;
            color: #007bff;
            margin-bottom: 15px;
        }
        .footer {
            background: #222;
            color: white;
            padding: 20px 0;
        }
        .footer a {
            color: #007bff;
            text-decoration: none;
            margin: 0 10px;
            font-size: 20px;
        }
        .footer a:hover {
            color: white;
        }
        /* Map Styling */
        #map {
            width: 100%;
            height: 400px;
            border-radius: 10px;
            box-shadow: 0px 
            4px 10px rgba(0, 0, 0, 0.2);
        }
        .card-img-top {
    clip-path: polygon(0% 15%, 100% 0%, 100% 100%, 0% 100%);
    object-fit: cover;
    height: 300px;
}

.card {
    margin-top: -90px; /* Atur sesuai kebutuhan */
}

.text-center {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.feature-card {
    background: white;
    border: 2px solid #007bff;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.feature-card:hover {
    background: #007bff;
    color: white;
    transform: translateY(-5px);
}

.feature-icon i {
    font-size: 50px;
    color: #007bff;
    margin-bottom: 15px;
}

.feature-card:hover .feature-icon i {
    color: white;
}

.feature-title {
    font-weight: 700;
    font-size: 1.3rem;
    margin-bottom: 10px;
}

.fade-in-bottom {
    opacity: 0;
    transform: translateY(50px);
    transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

.fade-in-bottom.active {
    opacity: 1;
    transform: translateY(0);
}


    </style>
</head>
<body>
    @include('navbar')
    
<!-- Hero Section -->
<div class="hero fade-in-bottom">
    <div class="container">
        <div class="hero-content-wrapper">
            <div class="hero-content custom-bg-purple">
                <h3>Durable & Sustainable Gabion</h3>
            </div>
            <div class="hero-content custom-bg-white">
                <h3><span style="color:#EB5B00;">For Every Applications</span></h3>
            </div>
        </div>
    </div>
</div>

<!-- About Section -->
<div class="container-fluid py-5" style="background-color: #000957; color: white; min-height: 600px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="card shadow-sm p-4">
                    <img src="https://arthadjaya.com/wp-content/uploads/2020/07/Jual-Kawat-Bronjong-2.jpg" class="card-img-top" alt="Tentang Kami">
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <h3 class="section-title mb-4">PT PERUNGGU</h3>
                    <p class="fs-5">Berlokasi di kawasan industri di perbatasan Surabaya dan Gresik, PT PERUNGGU memiliki keunggulan strategis karena dekat dengan jalur tol, depo, dan pelabuhan.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 offset-md-1 d-flex flex-column gap-3 mt-4">
    <p class="fs-5">Dengan produk kawat bronjong berstandar SNI yang dikeluarkan oleh Kemenperin dan KAN, produk kami siap bersaing dan bersinergi dalam pembangunan di seluruh Indonesia.</p>
</div>
</div>

<!-- Features Section -->
<div class="container py-5 text-center position-relative fade-in-bottom">
    <h2 class="section-title text-center position-absolute w-100" style="top: 10px;">Keunggulan Bronjong</h2>
    <div class="row justify-content-center mt-5">
        <div class="col-md-3 fade-in-bottom">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fa fa-shield-alt"></i>
                </div>
                <h4 class="feature-title">Tahan Lama</h4>
                <p>Bronjong dibuat dari kawat galvanis berkualitas tinggi, tahan karat, dan bertahan dalam berbagai cuaca.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fa fa-leaf"></i>
                </div>
                <h4 class="feature-title">Ramah Lingkungan</h4>
                <p>Digunakan sebagai pengaman lereng tanpa merusak ekosistem sekitar.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fa fa-cogs"></i>
                </div>
                <h4 class="feature-title">Mudah Dipasang</h4>
                <p>Desain fleksibel memungkinkan pemasangan cepat tanpa alat berat.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fa fa-handshake"></i>
                </div>
                <h4 class="feature-title">Ekonomis</h4>
                <p>Harga kompetitif dengan daya tahan tinggi, menjadi investasi terbaik untuk proyek Anda.</p>
            </div>
        </div>
        <div class="col-md-3 mt-4">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fa fa-tools"></i>
                </div>
                <h4 class="feature-title">Perawatan Mudah</h4>
                <p>Minim perawatan setelah pemasangan sehingga menghemat biaya.</p>
            </div>
        </div>
        <div class="col-md-3 mt-4">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fa fa-recycle"></i>
                </div>
                <h4 class="feature-title">Dapat Didaur Ulang</h4>
                <p>Material dapat digunakan kembali setelah masa pakai berakhir.</p>
            </div>
        </div>
        <div class="col-md-3 mt-4">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fa fa-water"></i>
                </div>
                <h4 class="feature-title">Menahan Erosi</h4>
                <p>Membantu menjaga stabilitas tanah di area yang rawan longsor.</p>
            </div>
        </div>
        <div class="col-md-3 mt-4">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fa fa-globe"></i>
                </div>
                <h4 class="feature-title">Serbaguna</h4>
                <p>Dapat digunakan dalam berbagai aplikasi, seperti perlindungan sungai dan jalan.</p>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div class="container-fluid py-5 d-flex justify-content-center" style="background-color: #000957; color: white; min-height: 400px;">
    <div class="container">
        <div class="row justify-content-center align-items-center mt-5 py-3">
            <div class="col-md-5 mb-4">
                <h3 class="text-center mb-4">Hubungi Kami</h3>
                <div class="border-start ps-3">
                    <p class="fs-5 mb-3 d-flex align-items-center gap-2">
                        <i class="fas fa-envelope text-white"></i>
                        <strong>Email:</strong> 
                        <a href="mailto:info@bronjong.com" class="text-white text-decoration-none">info@bronjong.com</a>
                    </p>
                    <p class="fs-5 mb-3 d-flex align-items-center gap-2">
                        <i class="fab fa-whatsapp text-white"></i>
                        <strong>WhatsApp:</strong> 
                        <a href="https://wa.me/6281234567890" class="text-white text-decoration-none">+62 812-3456-7890</a>
                    </p>
                    <p class="fs-5 d-flex align-items-center gap-2">
                        <i class="fas fa-map-marker-alt text-white"></i>
                        <strong>Lokasi:</strong> Jakarta, Indonesia
                    </p>
                </div>
            </div>

            <!-- Map Section -->
            <div class="col-md-6">
                <div class="card p-4 shadow-sm border-0 rounded-3">
                    <h3 class="text-center mb-3">Lokasi Kami</h3>
                    <div id="map" style="height: 300px; border-radius: 10px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Leaflet Map Script -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    var map = L.map('map').setView([-6.200000, 106.816666], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);
    L.marker([-6.200000, 106.816666]).addTo(map)
        .bindPopup("Lokasi Kantor Bronjong")
        .openPopup();
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const observer = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("active");
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.2 }
        );

        document.querySelectorAll(".fade-in-bottom").forEach(element => {
            observer.observe(element);
        });
    });
</script>

</body>
</html>