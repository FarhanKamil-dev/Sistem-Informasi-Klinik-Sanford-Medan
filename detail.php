<?php
include 'koneksi/koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM artikel WHERE id=$id");
$data = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= $data['judul']; ?> - Klinik Sanford</title>

  <!-- Favicon -->
  <link rel="icon" href="uploads/favicon.ico" type="image/x-icon">

  <!-- SEO -->
  <meta name="description" content="Klinik Sanford adalah tempat pengobatan terpercaya untuk penyakit kulit dan kelamin dengan layanan konsultasi online.">
  <meta name="keywords" content="klinik kelamin, penyakit kulit, penyakit kelamin, pengobatan penyakit kelamin, klinik sanford">
  <meta name="author" content="Klinik Sanford">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <!-- Animate.css -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />

  <!-- Google Font Merriweather -->
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">

  <!-- Custom Styling -->
  <style>
    body {
      font-family: 'Merriweather', serif;
    }

    .navbar-nav .nav-link {
      font-size: 20px;
      padding-right: 1.2rem;
    }

    .nav-link:hover {
      color: #0d6efd !important;
    }

    .custom-image {
      border: 4px solid #ddd;
      border-radius: 8px;
      width: 100%;
      max-height: 400px;
      object-fit: cover;
    }

    .artikel-konten {
      padding: 30px;
      margin: 40px auto;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    .artikel-konten h1,
    .artikel-konten h2,
    .artikel-konten h3,
    .artikel-konten h4 {
      font-weight: bold;
      margin-top: 1.5rem;
      margin-bottom: 1rem;
    }

    .artikel-konten p {
      line-height: 1.8;
      margin-bottom: 1rem;
    }

    .artikel-konten ul,
    .artikel-konten ol {
      padding-left: 1.5rem;
      margin-bottom: 1rem;
    }

    .artikel-konten li {
      margin-bottom: 0.5rem;
    }

    .artikel-konten blockquote {
      border-left: 4px solid #ccc;
      padding-left: 1rem;
      color: #666;
      font-style: italic;
    }

    /* Styling tabel supaya muncul border */
    .artikel-konten table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
    }

    .artikel-konten th,
    .artikel-konten td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: left;
    }

    /* Responsif tabel di HP */
    @media (max-width: 768px) {
      .artikel-konten {
        padding: 20px;
        margin: 20px 10px;
      }

      .navbar-brand img {
        height: 70px;
      }

      .navbar-nav .nav-link {
        font-size: 18px;
        padding-right: 1rem;
      }

      .artikel-konten table {
        display: block;
        overflow-x: auto;
        white-space: nowrap;
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
        <li class="nav-item"><a class="nav-link text-dark" href="tentang.php">Tentang Kami</a></li>
        <li class="nav-item"><a class="nav-link text-dark" href="kontak.php">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Konten Artikel -->
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-10 col-md-11 col-sm-12">
      <div class="artikel-konten">
        <h2 class="mb-3"><?= $data['judul']; ?></h2>
        <p class="text-muted">Dipublikasikan pada: <?= $data['tanggal']; ?></p>
        <?php if ($data['gambar']) : ?>
          <img src="uploads/<?= $data['gambar']; ?>" class="img-fluid rounded mb-4 custom-image" alt="<?= $data['judul']; ?>">
        <?php endif; ?>
        <?= $data['isi']; ?>
        <div class="mt-4">
          <a href="artikel.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali ke Artikel</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="text-white text-lg-start mt-5" style="background-color:rgb(12, 53, 100);">
  <div class="container py-4">
    <div class="row">
      <!-- Kontak -->
      <div class="col-md-6 mb-4 mb-md-0">
        <h5>Kontak:</h5>
        <p><i class="fab fa-whatsapp me-2"></i>0878 8907 7548</p>
        <p><i class="fas fa-envelope me-2"></i>info@kliniksanford.com</p>
        <p><i class="fab fa-instagram me-2"></i>@Klinik_Sanford</p>
        
      </div>
      <!-- Alamat -->
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

<!-- WhatsApp Floating Button -->
<div class="position-fixed bottom-0 end-0 p-4" style="z-index: 1050;">
  <button onclick="openWhatsAppPopup()" class="btn btn-success rounded-circle p-4 shadow animate__animated animate__bounceIn">
    <i class="fab fa-whatsapp fa-3x"></i>
  </button>
</div>

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
