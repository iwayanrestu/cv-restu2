<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'db_barang_pbw';

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>