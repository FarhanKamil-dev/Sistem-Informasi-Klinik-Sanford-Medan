<?php
// Setting error reporting dan upload limit
ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set('upload_max_filesize', '8M');
ini_set('post_max_size', '16M');
ini_set('max_execution_time', 300);

// Jalankan session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

// Koneksi database
include '../koneksi/koneksi.php';

// Setting timezone ke WIB
date_default_timezone_set('Asia/Jakarta');

if (isset($_POST['simpan'])) {
    // Ambil data dari form
    $judul = mysqli_real_escape_string($conn, strip_tags($_POST['judul']));
    $isi = mysqli_real_escape_string($conn, $_POST['isi']);
    $tanggal = date("Y-m-d H:i:s"); // Tanggal dan jam sekarang

    // Proses upload gambar jika ada
    $gambar = null;
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
        $gambarName = preg_replace("/[^a-zA-Z0-9\._-]/", "", $_FILES['gambar']['name']);
        $tmp = $_FILES['gambar']['tmp_name'];

        $path = "../uploads/" . $gambarName;
        if (move_uploaded_file($tmp, $path)) {
            $gambar = $gambarName;
        }
    }

    // Simpan ke database
    $query = mysqli_query($conn, "INSERT INTO artikel (judul, isi, gambar, tanggal) 
                                  VALUES ('$judul', '$isi', '$gambar', '$tanggal')");
    if ($query) {
        $_SESSION['sukses'] = "Artikel berhasil ditambahkan!";
        header("Location: dashboard.php");
        exit;
    } else {
        echo "<div class='alert alert-danger'>Gagal menambahkan artikel: " . mysqli_error($conn) . "</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Artikel</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Roboto&display=swap" rel="stylesheet">

    <!-- Animate.css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- CKEditor 5 -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

    <style>
      body {
          font-family: 'Merriweather', serif;
      }

      .card {
          background-color: #fff;
          border-radius: 10px;
          box-shadow: 0 0 10px rgba(0,0,0,0.05);
      }

      .ck-editor__editable {
          min-height: 300px;
      }

      /* Styling tabel agar nanti tetap konsisten di artikel */
      .ck-content table {
          width: 100%;
          border-collapse: collapse;
          margin: 20px 0;
      }

      .ck-content th,
      .ck-content td {
          border: 1px solid #ccc;
          padding: 8px;
          text-align: left;
      }

      /* Responsive untuk CKEditor di HP */
      @media (max-width: 768px) {
          .container {
              padding: 15px;
          }
      }
    </style>
</head>
<body>
<div class="container py-5">
    <h2 class="mb-4">Tambah Artikel</h2>

    <form method="post" enctype="multipart/form-data" class="card p-4 shadow-sm">
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="isi" class="form-label">Isi Artikel</label>
            <textarea name="isi" id="isi" required></textarea>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Upload Gambar (Opsional)</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
        </div>

        <div class="d-flex gap-2">
            <button type="submit" name="simpan" class="btn btn-primary animate__animated animate__fadeInUp">Simpan Artikel</button>
            <a href="dashboard.php" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>

<!-- Inisialisasi CKEditor -->
<script>
ClassicEditor.create(document.querySelector('#isi'), {
    toolbar: {
        items: [
            'undo', 'redo', '|',
            'heading', '|',
            'bold', 'italic', 'underline', 'link', '|',
            'bulletedList', 'numberedList', '|',
            'blockQuote', '|',
            'insertTable', '|',
            'mediaEmbed', '|',
            'fontFamily', 'fontSize', 'fontColor', 'fontBackgroundColor', '|',
            'alignment', '|',
            'removeFormat', 'fullscreen'
        ]
    },
    table: {
        contentToolbar: [ 'tableColumn', 'tableRow', 'mergeTableCells' ]
    },
    fontFamily: {
        options: [
            'default',
            'Merriweather, serif',
            'Roboto, sans-serif',
            'Arial, Helvetica, sans-serif',
            'Times New Roman, Times, serif'
        ]
    },
    fontSize: {
        options: [
            10, 12, 14, 16, 18, 24, 36
        ]
    },
    mediaEmbed: {
        previewsInData: true
    }
}).catch(error => {
    console.error(error);
});
</script>

</body>
</html>
