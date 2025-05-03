<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
include '../koneksi/koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM artikel WHERE id=$id");

header("Location: dashboard.php");
