{{-- <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Bronjong</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .contact-section {
            background-color: #f4f4f4;
            padding: 50px 0;
        }

        .contact-form .form-control {
            border-radius: 5px;
        }

        .contact-section h2 {
            font-size: 2rem;
            color: #007bff;
            font-weight: 700;
        }

        .contact-info {
            margin-top: 30px;
        }

        .contact-info .info-item {
            margin-bottom: 20px;
        }

        .contact-info .info-item i {
            font-size: 1.5rem;
            color: #007bff;
        }

        .footer {
            background: #222;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

    </style>
</head>
<body>

@include('navbar')

<!-- Contact Form Section -->
<div class="contact-section">
    <div class="container">
        <h2 class="text-center mb-5">Kontak Kami</h2>
        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-6">
                <form action="/send-message" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Anda</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Anda</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan Anda</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="col-md-6 contact-info">
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <p><strong>Alamat:</strong> Jakarta, Indonesia</p>
                </div>
                <div class="info-item">
                    <i class="fas fa-phone-alt"></i>
                    <p><strong>Telepon:</strong> +62 812-3456-7890</p>
                </div>
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <p><strong>Email:</strong> <a href="mailto:info@bronjong.com">info@bronjong.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<center>
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
</center>
<!-- Footer Section -->
<div class="footer">
    <p>&copy; 2025 PT Perunggu. All rights reserved.</p>
</div>

</body>
</html> --}}

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Mulia Jaya | Tentang Kami</title>
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
            <h1 class="display-4">Hubungi Kami</h1>
        </div>
    </div>
          <!-- Contact Form Section -->
<div class="contact-section">
    <div class="container">
        <h2 class="text-center mb-5"></h2>
        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-6">
                <form action="/send-message" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Nomor Telepon</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    <h2 class="text-center mb-5"></h2>
                </form>
            </div>


            <!-- Contact Information -->
         <div class="col-md-6 contact-info">
    <div class="info-item">
        <img src="images/work.png" alt="Logo" style="width: 130%; height: auto; position: relative; top: -48px;">
    </div>
</div>


                {{-- <div class="info-item">
                    <i class="fas fa-phone-alt"></i>
                    <p><strong>Telepon:</strong> +62 812-3456-7890</p>
                </div>
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <p><strong>Email:</strong> <a href="mailto:info@bronjong.com">info@bronjong.com</a></p>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<center>
    <div class="container-fluid py-5 d-flex justify-content-center" style="background-color: #000957; color: white; min-height: 400px;">
        <div class="container">
            <div class="row justify-content-center align-items-center mt-5 py-3">
                <div class="col-md-5 mb-4">
                    <h3 class="text-center mb-4"></h3>
                    <div class="border-start ps-3">
                        <p class="fs-5 mb-3 d-flex align-items-center gap-2">
                            <i class="fas fa-envelope text-white"></i>
                            <strong>Email:</strong>
                            <a href="mailto:info@bronjong.com" class="text-white text-decoration-none">info@bronjong.com</a>
                        </p>
                        <p class="fs-5 mb-3 d-flex align-items-center gap-2">
                            <i class="fab fa-whatsapp text-white"></i>
                            <strong>WhatsApp:</strong>
                            <a href="https://wa.me/6281280277160" class="text-white text-decoration-none">+62 812-8027-7160</a>
                            </p>
                            <p class="fs-5 d-flex align-items-center gap-2">
                                <i class="fas fa-map-marker-alt text-white"></i>
                                <strong>Lokasi:</strong> Bogor, Indonesia
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
            var map = L.map('map').setView([-6.642270922154071, 106.87148395724725], 13);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; OpenStreetMap contributors'
            }).addTo(map);
            L.marker([-6.642270922154071, 106.87148395724725]).addTo(map)
                .bindPopup("Lokasi Pt Mulia Jaya")
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
