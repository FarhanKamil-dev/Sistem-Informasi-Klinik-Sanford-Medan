<?php
$host = "localhost";
$user = "u440963478_sanfordcare";
$pass = "!!!Snfrdcr867";
$db   = "u440963478_sanfordcare";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
