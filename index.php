<?php include 'koneksi/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klinik Sanford | Pengobatan Penyakit Kulit & Kelamin</title>

  <!-- Favicon -->
  <link rel="icon" href="uploads/favicon.ico" type="image/x-icon">

  <!-- SEO -->
  <meta name="description" content="Klinik Sanford adalah tempat pengobatan terpercaya untuk penyakit kulit dan kelamin dengan layanan konsultasi online.">
  <meta name="keywords" content="klinik kelamin, penyakit kulit, penyakit kelamin, pengobatan penyakit kelamin, klinik sanford">
  <meta name="author" content="Klinik Sanford">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">

  <!-- Animate.css -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />

  <!-- Google Font Merriweather -->
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">


  <!-- Custom CSS -->
  <style>
    body {
      font-family: 'Merriweather', serif;
    }

    .navbar-nav .nav-link {
    font-size: 24px;          /* Ukuran font */
    padding-right: 1.5rem;    /* Jarak antar item menu */
    }
  
    .nav-link:hover {
      color: #0d6efd !important;
    }

    .custom-image {
      border: 4px solid #ddd;
      border-radius: 8px;
    }

    .info-section {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-bottom: 40px;
      margin-top: -20px;
    }

    .info-card {
      flex: 1 1 300px;
      background-color: #007bff;
      color: white;
      padding: 25px;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .info-card h2 {
      font-size: 1.25rem;
      margin-bottom: 15px;
    }

    .info-card .info {
      font-size: 1rem;
      margin-bottom: 10px;
    }

    .info-card .contact {
      color: #fff;
      text-decoration: underline;
    }

    .info-card .contact:hover {
      color: #d9edf7;
    }

    @media (max-width: 768px) {
      .navbar-nav .nav-link {
        font-size: 1rem;
        padding-right: 0.5rem;
      }

      .position-fixed.bottom-0.end-0 {
        right: 1rem !important;
        bottom: 1rem !important;
      }

      .btn.btn-success.rounded-circle.p-4 {
        padding: 1rem !important;
        font-size: 2rem !important;
      }
    .page-container {
    border: 2px solid #ccc;
    padding: 20px;
    border-radius: 10px;
    margin-top: 20px;
    margin-bottom: 20px;
    background-color: #fff;
  }
  .custom-elegant-card {
    border: 1px solid #dee2e6; /* abu-abu lembut */
    border-radius: 1rem; /* rounded besar */
    box-shadow: 0 0.25rem 1rem rgba(0, 0, 0, 0.05); /* bayangan lembut */
    background-color: #fff; /* putih bersih */
  }
  .custom-elegant-card:hover {
  box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.08);
  transition: 0.3s ease;
}

    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="uploads/logo_klinik_sanford.png" alt="Logo Klinik Sanford" height="100">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link text-dark" href="index.php">Beranda</a></li>
        <li class="nav-item"><a class="nav-link text-dark" href="artikel.php">Artikel</a></li>
        <li class="nav-item"><a class="nav-link text-dark active" href="tentang.php">Tentang Kami</a></li>
        <li class="nav-item"><a class="nav-link text-dark" href="kontak.php">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Banner -->
<div class="container mt-4">
  <div class="position-relative rounded overflow-hidden" style="height: 400px; background-image: url('uploads/konsultasi_dokter.jpg'); background-size: cover; background-position: center;">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex flex-column justify-content-center align-items-center text-white text-center px-3">
      
      <!-- Judul -->
      <h1 class="fw-bold animate__animated animate__fadeInDown text-white" style="font-size: 2.5rem;">
        Klinik Sanford
      </h1>

      <!-- Subjudul -->
      <h4 class="animate__animated animate__fadeInDown" style="font-weight: 600;">
        Konsultasi Berbagai Jenis Penyakit Kelamin
      </h4>
<br>
<br>
      <!-- Keterangan -->
      <p class="animate__animated animate__fadeInUp" style="font-size: 1rem; text-justify max-width: 600px;">
        Layanan Konsultasi Penyakit Kelamin dengan Dokter Ahli & Privasi Terjaga
      </p>

      <!-- Tombol -->
      <button class="btn btn-success btn-lg mt-3 animate__animated animate__zoomIn" onclick="openWhatsAppPopup()">
        <i class="fab fa-whatsapp"></i> Konsultasi Online
      </button>
    </div>
  </div>
</div>

<!-- Tambahkan media query ringan -->
<style>
  @media (max-width: 576px) {
    h1 {
      font-size: 2rem !important;
    }
    h4 {
      font-size: 1.2rem;
    }
    p {
      font-size: 0.9rem;
    }
  }
</style>
<br>
<br>
<!-- Info Jadwal & Lokasi -->
<div class="container info-section ">
  <div class="info-card">
    <h2><i class="fas fa-user-doctor me-2"></i>Jadwal Praktik Dokter</h2>
    <div class="info"><i class="fas fa-calendar-days me-2"></i>Senin - Minggu</div>
    <div class="info"><i class="fas fa-clock me-2"></i>07:00 - 23:00</div>
    <a href="tel:087889075748" class="contact">
      <i class="fas fa-phone me-2"></i>0878 8907 7548
    </a>
  </div>

  <di class="info-card">
    <h2><i class="fas -dot me-2"></i>Lokasi Klinik Sanford</h2>
    <div class="info"><i class="fas fa-map-marker-alt me-2"></i>Ruko Kompleks Mall Center Point, Blok M No.33 Kel. Gang Buntu, Kec. Medan Timur, Kota Medan, Sumatera Utara 20231</div>
  </div>
</div>


<!-- Jenis Penyakit Yang Kami Tangani -->
<div class="container py-5">
  <div class="custom-elegant-card p-4">
    <h2 class="mb-4 text-center text-dark">Jenis Penyakit Yang Kami Tangani</h2>
    <div class="row text-center g-4">

      <div class="col-6 col-md-3">
        <img src="uploads/icons/disfungsi_seksual.svg" alt="Disfungsi Seksual" class="img-fluid w-35 mx-auto d-block">
        <p class="mt-2">Disfungsi Seksual</p>
      </div>

      <div class="col-6 col-md-3">
        <img src="uploads/icons/gonore.svg" alt="Gonore" class="img-fluid w-35 mx-auto d-block">
        <p class="mt-2">Gonore/Kencing Nanah</p>
      </div>

      <div class="col-6 col-md-3">
        <img src="uploads/icons/herpes.svg" alt="Herpes" class="img-fluid w-35 mx-auto d-block">
        <p class="mt-2">Herpes</p>
      </div>

      <div class="col-6 col-md-3">
        <img src="uploads/icons/isk.svg" alt="ISK" class="img-fluid w-35 mx-auto d-block">
        <p class="mt-2">ISK</p>
      </div>

      <div class="col-6 col-md-3">
        <img src="uploads/icons/kulup_panjang.svg" alt="Kulup Panjang" class="img-fluid w-35 mx-auto d-block">
        <p class="mt-2">Kulup Panjang</p>
      </div>

      <div class="col-6 col-md-3">
        <img src="uploads/icons/kutil_kelamin.svg" alt="Kutil Kelamin" class="img-fluid w-35 mx-auto d-block">
        <p class="mt-2">Kutil Kelamin</p>
      </div>

      <div class="col-6 col-md-3">
        <img src="uploads/icons/pembesaran_prostat.svg" alt="Pembesaran Prostat" class="img-fluid w-35 mx-auto d-block">
        <p class="mt-2">Pembesaran Prostat</p>
      </div>

      <div class="col-6 col-md-3">
        <img src="uploads/icons/penyakit_menular_seksual.svg" alt="Penyakit Menular Seksual" class="img-fluid w-35 mx-auto d-block">
        <p class="mt-2">Penyakit Menular Seksual</p>
      </div>

      <div class="col-6 col-md-3">
        <img src="uploads/icons/peradangan_andrologi.svg" alt="Peradangan Andrologi" class="img-fluid w-35 mx-auto d-block">
        <p class="mt-2">Peradangan Andrologi</p>
      </div>

      <div class="col-6 col-md-3">
        <img src="uploads/icons/peradangan_testis.svg" alt="Peradangan Testis" class="img-fluid w-35 mx-auto d-block">
        <p class="mt-2">Peradangan Testis</p>
      </div>

      <div class="col-6 col-md-3">
        <img src="uploads/icons/phimosis.svg" alt="Phimosis" class="img-fluid w-35 mx-auto d-block">
        <p class="mt-2">Phimosis</p>
      </div>

      <div class="col-6 col-md-3">
        <img src="uploads/icons/sifilis.svg" alt="Sifilis" class="img-fluid w-35 mx-auto d-block">
        <p class="mt-2">Sifilis</p>
      </div>

    </div>
  </div>
</div>
</div>

<style>
  .custom-elegant-card {
    border: 1px solid #dee2e6;
    border-radius: 1rem;
    box-shadow: 0 0.25rem 1rem rgba(0, 0, 0, 0.05);
    background-color: #fff;
  }
</style>


<!-- Konten -->
<div class="container py-5">
    <div class="custom-elegant-card p-4">
  <h2 class="mb-4">Klinik Sanford</h2>

  <div class="row">
    <!-- Konten Teks -->
    <div class="col-md-8 order-2 order-md-1">
      <p style="text-align: justify;">
        Klinik Sanford adalah klinik pengobatan khusus yang menangani beragam keluhan mengenai penyakit kulit dan penyakit kelamin. Telah banyak membantu kesembuhan pasien dengan berbagai tingkat yang ditangani langsung oleh dokter ahli di Klinik Sanford serta didukung oleh laboratorium terpercaya untuk memberikan hasil yang akurat.
      </p>

      <p style="text-align: justify;">
        Klinik Sanford menawarkan layanan pengobatan penyakit kulit dan kelamin dengan standar pelayanan terbaik dan harga yang terjangkau. Kami sangat mengutamakan privasi Anda. Kerahasiaan dan kenyamanan pasien menjadi prioritas utama sehingga Anda dapat menjalani pengobatan dengan tenang sampai keluhan Anda teratasi sepenuhnya.
      </p>

      <p style="text-align: justify;">
        <strong>Misi kami:</strong>
      </p>
      <ul>
        <li>Memberikan pelayanan kesehatan kulit & kelamin terbaik dan bermutu dengan mengutamakan privasi, keamanan, dan kenyamanan pasien.</li>
        <li>Meningkatkan profesionalisme dan mutu seluruh dokter, tenaga kesehatan, dan staf Klinik Sanford.</li>
        <li>Memberikan pelayanan terbaik dengan biaya terjangkau untuk semua pasien.</li>
        <li>Meningkatkan sarana dan prasarana klinik serta menjalankan manajemen dan tata kelola yang optimal.</li>
      </ul>
    </div>

    <!-- Gambar -->
    <div class="col-md-4 order-1 order-md-2 mb-4 mb-md-0 text-md-end text-center">
      <img src="uploads/konsultasi_dokter.jpg" alt="Ruko Klinik Sanford" class="img-fluid custom-image shadow-sm">
    </div>
  </div>
</div>
</div>

<!-- Konten -->
<div class="container py-5">
    <div class="custom-elegant-card p-4">
  <h2 class="mb-4">Mengapa Harus Berobat di Klinik Sanford</h2>

  <div class="row align-items-center">
    <!-- Gambar -->
    <div class="col-md-4 order-1 order-md-1 mb-4 mb-md-0 text-md-start text-center">
      <img src="uploads/konsultasi_dokter.jpg" alt="Ruko Klinik Sanford" class="img-fluid custom-image shadow-sm">
    </div>

    <!-- Konten Teks -->
    <div class="col-md-8 order-2 order-md-2">
      <p style="text-align: justify;">
        <strong>Layanan yang disediakan di Klinik Sanford:</strong>
      </p>
      <ul class="list-unstyled">
        <li><i class="fas fa-user-md text-primary me-2"></i>Konsultasi</li>
        <li><i class="fas fa-stethoscope text-success me-2"></i>Pemeriksaan dan Diagnosa</li>
        <li><i class="fas fa-pills text-danger me-2"></i>Pengobatan</li>
        <li><i class="fas fa-syringe text-warning me-2"></i>Vaksinasi</li>
      </ul>

      <p style="text-align: justify;">
        <strong>Keunggulan Klinik Sanford:</strong>
      </p>
      <ul class="list-unstyled">
        <li><i class="fas fa-shield-alt text-info me-2"></i>Kerahasiaan dan privasi pasien sangat dijaga.</li>
        <li><i class="fas fa-user-nurse text-secondary me-2"></i>Pelayanan perawatan yang terbaik dan profesional.</li>
      </ul>
    </div>
  </div>
</div>
</div>



<!-- Artikel Terbaru -->
<div class="container py-5">
    <div class="custom-elegant-card p-4">
  <h2 class="mb-4 text-center">Artikel Terbaru</h2>
  <div class="row">
    <?php
    // Set zona waktu ke Jakarta
date_default_timezone_set('Asia/Jakarta');
    $query = mysqli_query($conn, "SELECT * FROM artikel ORDER BY tanggal DESC LIMIT 3");
    while ($data = mysqli_fetch_array($query)) {
    ?>
    <div class="col-md-4 mb-4">
      <div class="card h-100 shadow-sm animate__animated animate__fadeInUp">
        <a href="detail.php?id=<?= $data['id']; ?>" class="stretched-link text-decoration-none text-dark">
          <?php if (!empty($data['gambar'])) { ?>
            <img src="uploads/<?= $data['gambar']; ?>" class="card-img-top" alt="<?= $data['judul']; ?>" style="height: 200px; object-fit: cover;">
          <?php } ?>
          <div class="card-body">
            <h5 class="card-title"><?= $data['judul']; ?></h5>
            <p class="text-muted" style="font-size: 14px;">
              <i class="far fa-calendar-alt me-2"></i><?= date("d M Y", strtotime($data['tanggal'])); ?>
            </p>
             <p class="text-muted" style="font-size: 14px;">
              <i class="far fa-clock me-2"></i><?= date("H:i", strtotime($data['tanggal'])); ?>
            </p>
          </div>
        </a>
      </div>
    </div>
    <?php } ?>
  </div>
  </div>
  <!-- Tombol Artikel Lainnya dengan Gaya Bootstrap dan Animasi -->
            <div class="text-center mt-5">
                <a href="artikel.php#artikel" 
                   class="btn btn-primary px-4 py-2 rounded-pill shadow-sm animate__animated animate__fadeInUp"
                   style="animation-delay: 0.3s;">
                   <i class="fas fa-book-open me-2"></i> Artikel Lainnya
                </a>
            </div>
</div>



<!-- Floating WhatsApp Button -->
<div class="position-fixed bottom-0 end-0 p-4" style="z-index: 1050;">
  <button onclick="openWhatsAppPopup()" class="btn btn-success rounded-circle p-4 shadow animate__animated animate__bounceIn">
    <i class="fab fa-whatsapp fa-3x"></i>
  </button>
</div>

<!-- Footer -->
<footer class="text-white text-lg-start mt-5" style="background-color:rgb(12, 53, 100);">
  <div class="container py-4">
    <div class="row">
      <!-- Kiri: Kontak + Sosial Media -->
      <div class="col-md-6 mb-4 mb-md-0">
        <h5>Kontak:</h5>
        <p><i class="fab fa-whatsapp me-2"></i>0878 8907 7548</p>
        <p><i class="fas fa-envelope me-2"></i>info@kliniksanford.com</p>
        <p><i class="fab fa-instagram me-2"></i>@Klinik_Sanford</p>
        
      </div>

      <!-- Kanan: Alamat -->
      <div class="col-md-6 mb-4 mb-md-0">
        <h5>Alamat:</h5>
        <p><i class="fas fa-map-marker-alt me-2"></i>Ruko Kompleks Mall Center Point, Blok M No.33 Kel. Gang Buntu, Kec. Medan Timur, Kota Medan</p>
      </div>
    </div>
  </div>

  <div class="bg-dark text-white text-center py-2">
    &copy; <?= date("Y"); ?> Klinik Sanford
  </div>
</footer>


<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
function openWhatsAppPopup() {
  const link = "https://wa.me/6287889077548?text=Halo%20dok,%20saya%20ingin%20konsultasi";
  const width = 500;
  const height = 600;
  const left = (window.innerWidth - width) / 2;
  const top = (window.innerHeight - height) / 2;
  window.open(link, 'Konsultasi WhatsApp', `width=${width},height=${height},top=${top},left=${left}`);
}
</script>

</body>
</html>