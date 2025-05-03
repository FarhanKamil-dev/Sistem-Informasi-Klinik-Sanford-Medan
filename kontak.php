<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak - Klinik Sanford</title>

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

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">

  <style>
  body {
    font-family: 'Merriweather', serif;
  }

  .navbar-nav .nav-link {
    font-size: 24px;
    padding-right: 1.5rem;
  }

  .nav-link:hover {
    color: #0d6efd !important;
  }
  @media (max-width: 768px) {
      .navbar-nav .nav-link {
        font-size: 1rem;
        padding-right: 0.5rem;
      }

  .custom-image {
    border: 4px solid #ddd;
    border-radius: 8px;
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
        <li class="nav-item"><a class="nav-link text-dark active" href="kontak.php">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Konten -->
<div class="container py-5">
  <h2 class="mb-4 text-start"><i class="fas fa-envelope-open-text me-2"></i>Kontak Kami</h2>
  <div class="row justify-content-start">
    <div class="col-md-8">
      <div class="list-group list-group-flush">
        <div class="list-group-item d-flex align-items-start">
          <i class="fas fa-envelope fa-lg text-primary me-3 mt-1"></i>
          <div>
            <strong>Email:</strong> 
            <a href="mailto:info@kliniksanford.com">info@kliniksanford.com</a>
          </div>
        </div>
        <div class="list-group-item d-flex align-items-start">
          <i class="fab fa-whatsapp fa-lg text-success me-3 mt-1"></i>
          <div>
            <strong>WhatsApp:</strong> 
            <a href="https://wa.me/6287889077548" target="_blank">0878 8907 7548</a>
          </div>
        </div>
        <div class="list-group-item d-flex align-items-start">
          <i class="fas fa-map-marker-alt fa-lg text-danger me-3 mt-1"></i>
          <div>
            <strong>Alamat:</strong><br>
            Ruko Komplek Mall Center Point, Blok M No.33,<br>
            Kel. Gang Buntu, Kec. Medan Timur,<br>
            Kota Medan, Sumatera Utara 20231
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Google Maps -->
<div class="mt-4">
  <iframe
    title="Lokasi Klinik Sanford di Medan"
    src="https://www.google.com/maps?q=Centre%20Point%2C%20Ruko%20Komplek%20Mall%20No.33%20Blok%20M%2C%20Gg.%20Buntu%2C%20Kec.%20Medan%20Tim.%2C%20Kota%20Medan%2C%20Sumatera%20Utara%2020231&output=embed"
    width="100%"
    height="400"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
  <!-- Tombol Lihat di Google Maps -->
  <div class="text-center mt-3">
    <a href="https://maps.app.goo.gl/n5k7xzannt9FtqVz9" 
       target="_blank" 
       class="btn btn-primary">
      Lihat di Google Maps
    </a>
  </div>
</div>


<!-- WhatsApp Floating Button -->
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

<!-- Script -->
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
