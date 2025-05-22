<?php
// Konfigurasi koneksi
$servername = "localhost";   // Host MySQL (biasanya localhost)
$username = "root";          // Username default XAMPP
$password = "";              // Password default (kosong)
$database = "lab7web"; // Ganti dengan nama database kamu

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil!";
?>
