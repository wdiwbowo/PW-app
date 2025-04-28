<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Perunggu | Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .hero {
            height: 60vh;
            background: url('https://kpssteel.com/storage/2022/10/Ukuran-Kawat-Bronjong-yang-Sesuai-SNI-untuk-Beragam-Kebutuhan-KPS-Steel-Distributor-Besi-Jakarta-1024x683.jpg') no-repeat center center/cover;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
            padding-bottom: 70px;
        }
        .overlay {
            background: rgba(0, 0, 0, 0.5);
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }
        .hero-content {
            position: relative;
            z-index: 2;
        }
        .section-title {
            font-weight: 700;
            font-size: 2rem;
            color: #007bff;
        }
        .team-card {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
            position: relative;
            width: 220px;
            margin: auto;
            clip-path: polygon(10% 0%, 100% 0%, 90% 100%, 0% 100%);
        }
        .team-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 10px;
            clip-path: polygon(10% 0%, 100% 0%, 90% 100%, 0% 100%);
        }
        .team-card:hover {
            transform: translateY(-10px);
        }
        .position-container {
            text-align: center;
            margin-top: 10px;
        }
        .position-title {
            font-weight: bold;
            color: #007bff;
            font-size: 12px;
        }
        .vision-mission p, .vision-mission li {
            font-size: 14px;
        }
    </style>
</head>
<body>
    @include('navbar')
    
    <div class="hero">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1 class="display-4">Spesifikasi Produk</h1>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title">Sejarah Perusahaan</h2>
                <p>PT PERUNGGU didirikan pada tahun XXXX dengan visi untuk memberikan solusi inovatif dalam industri teknologi. Sejak awal berdiri, kami telah berkembang menjadi perusahaan terkemuka dengan berbagai pencapaian signifikan.</p>
            </div>
            <div class="col-md-12 vision-mission mt-4">
                <h2 class="section-title">Visi & Misi</h2>
                <h4>Visi</h4>
                <p>Menjadi perusahaan teknologi terdepan yang memberikan solusi terbaik bagi pelanggan.</p>
                <h4>Misi</h4>
                <ul>
                    <li>Mengembangkan produk inovatif berbasis teknologi.</li>
                    <li>Memberikan pelayanan terbaik kepada pelanggan.</li>
                    <li>Meningkatkan kesejahteraan karyawan dan masyarakat.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h2 class="section-title text-center">Tim Kami</h2>
        <div class="row justify-content-center">
            <div class="col-md-3 mb-4">
                <div class="team-card">
                    <img src="/images/unduhan__20_-removebg-preview.png" alt="CEO">
                    <h5 class="mt-3">John Doe</h5>
                    <p class="position-title">CEO</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="team-card">
                    <img src="/images/unduhan__20_-removebg-preview.png" alt="CTO">
                    <h5 class="mt-3">Jane Smith</h5>
                    <p class="position-title">CTO</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="team-card">
                    <img src="/images/unduhan__20_-removebg-preview.png" alt="CFO">
                    <h5 class="mt-3">Michael Brown</h5>
                    <p class="position-title">CFO</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="team-card">
                    <img src="/images/unduhan__20_-removebg-preview.png" alt="CFO">
                    <h5 class="mt-3">Michael Brown</h5>
                    <p class="position-title">CFO</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="team-card">
                    <img src="/images/unduhan__20_-removebg-preview.png" alt="CFO">
                    <h5 class="mt-3">Michael Brown</h5>
                    <p class="position-title">CFO</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="team-card">
                    <img src="/images/unduhan__20_-removebg-preview.png" alt="CFO">
                    <h5 class="mt-3">Michael Brown</h5>
                    <p class="position-title">CFO</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="team-card">
                    <img src="/images/unduhan__20_-removebg-preview.png" alt="CFO">
                    <h5 class="mt-3">Michael Brown</h5>
                    <p class="position-title">CFO</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="team-card">
                    <img src="/images/unduhan__20_-removebg-preview.png" alt="CFO">
                    <h5 class="mt-3">Michael Brown</h5>
                    <p class="position-title">CFO</p>
                </div>
            </div>
        </div>
    </div>
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
