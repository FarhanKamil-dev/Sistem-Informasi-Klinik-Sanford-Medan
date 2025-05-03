<?php
// Setting error reporting dan batas upload
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

// Cek ID artikel
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($id <= 0) {
    echo "ID artikel tidak valid.";
    exit;
}

// Ambil data artikel
$query = mysqli_query($conn, "SELECT * FROM artikel WHERE id=$id");
if (!$query || mysqli_num_rows($query) == 0) {
    echo "Artikel tidak ditemukan.";
    exit;
}
$data = mysqli_fetch_assoc($query);

// Proses update
if (isset($_POST['update'])) {
    $judul = mysqli_real_escape_string($conn, strip_tags($_POST['judul']));
    $isi = mysqli_real_escape_string($conn, $_POST['isi']);
    $tanggal = date("Y-m-d H:i:s"); // Sekarang lengkap tanggal dan jam

    $gambarBaru = null;

    // Cek upload gambar baru
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
        $gambarName = preg_replace("/[^a-zA-Z0-9\._-]/", "", $_FILES['gambar']['name']);
        $tmp = $_FILES['gambar']['tmp_name'];
        $path = "../uploads/" . $gambarName;

        if (move_uploaded_file($tmp, $path)) {
            $gambarBaru = $gambarName;
        }
    }

    // Query update
    if ($gambarBaru) {
        $queryUpdate = "UPDATE artikel SET judul='$judul', isi='$isi', gambar='$gambarBaru', tanggal='$tanggal' WHERE id=$id";
    } else {
        $queryUpdate = "UPDATE artikel SET judul='$judul', isi='$isi', tanggal='$tanggal' WHERE id=$id";
    }

    if (mysqli_query($conn, $queryUpdate)) {
        $_SESSION['sukses'] = "Artikel berhasil diperbarui!";
        header("Location: dashboard.php");
        exit;
    } else {
        echo "<div class='alert alert-danger'>Gagal mengedit artikel: " . mysqli_error($conn) . "</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Artikel</title>

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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #cccccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body style="font-family: 'Merriweather', serif;">

<div class="container py-5">
    <h2 class="mb-4">Edit Artikel</h2>

    <form method="post" enctype="multipart/form-data" class="card p-4 shadow-sm">
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <textarea name="judul" id="judul" rows="2" class="form-control" required><?= htmlspecialchars($data['judul']); ?></textarea>
        </div>

        <div class="mb-3">
            <label for="isi" class="form-label">Isi Artikel</label>
            <textarea name="isi" id="isi" rows="10" class="form-control" required><?= htmlspecialchars($data['isi']); ?></textarea>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Ganti Gambar (Opsional)</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
            <?php if ($data['gambar']) : ?>
                <p class="mt-2">
                    <img src="../uploads/<?= $data['gambar']; ?>" width="150" alt="Gambar Artikel">
                </p>
            <?php endif; ?>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" name="update" class="btn btn-primary animate__animated animate__fadeInUp">Update Artikel</button>
            <a href="dashboard.php" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>

<script>
    ClassicEditor
        .create(document.querySelector('#isi'), {
            toolbar: {
                items: [
                    'heading', '|',
                    'bold', 'italic', 'underline', '|',
                    'bulletedList', 'numberedList', '|',
                    'link', 'insertTable', 'imageUpload', 'mediaEmbed', '|',
                    'undo', 'redo'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn', 'tableRow', 'mergeTableCells'
                ]
            },
            language: 'id'
        })
        .catch(error => {
            console.error(error);
        });
</script>

</body>
</html>
