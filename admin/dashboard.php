<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
include '../koneksi/koneksi.php';

// Menentukan sorting
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'desc';
$order = ($sort == 'asc') ? 'ASC' : 'DESC';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- SweetAlert2 untuk notifikasi sukses -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<div class="container py-4">
    <h2 class="mb-4">Dashboard Admin</h2>

    <!-- Tombol atas -->
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <div>
            <a href="tambah_artikel.php" class="btn btn-success">+ Tambah Artikel</a>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>

        <!-- Dropdown Sortir -->
        <form method="get" class="d-flex align-items-center">
            <label for="sort" class="me-2 mb-0">Urutkan:</label>
            <select name="sort" id="sort" class="form-select" onchange="this.form.submit()" style="width: auto;">
                <option value="desc" <?= ($sort == 'desc') ? 'selected' : ''; ?>>Terbaru</option>
                <option value="asc" <?= ($sort == 'asc') ? 'selected' : ''; ?>>Terlama</option>
            </select>
        </form>
    </div>

    <!-- Tabel Artikel -->
    <table class="table table-bordered table-hover">
        <thead class="table-primary text-center">
            <tr>
                <th>Judul</th>
                <th>Tanggal & Jam Upload</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $query = mysqli_query($conn, "SELECT * FROM artikel ORDER BY tanggal $order");
        while ($data = mysqli_fetch_assoc($query)) {
            $tanggalUpload = date('d-m-Y H:i', strtotime($data['tanggal']));
            echo "<tr class='align-middle'>
                    <td>{$data['judul']}</td>
                    <td class='text-center'>{$tanggalUpload}</td>
                    <td class='text-center'>
                        <a href='edit_artikel.php?id={$data['id']}' class='btn btn-sm btn-warning'>Edit</a>
                        <a href='hapus_artikel.php?id={$data['id']}' class='btn btn-sm btn-danger' onclick='return confirm(\"Yakin mau hapus artikel ini?\")'>Hapus</a>
                    </td>
                </tr>";
        }
        ?>
        </tbody>
    </table>
</div>

<!-- SweetAlert Success Notif -->
<?php if (isset($_SESSION['sukses'])) : ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Sukses!',
    text: '<?= $_SESSION['sukses']; ?>',
    showConfirmButton: false,
    timer: 2000
});
</script>
<?php unset($_SESSION['sukses']); endif; ?>

</body>
</html>
