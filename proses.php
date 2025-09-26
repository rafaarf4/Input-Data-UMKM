<?php
// koneksi
$koneksi = new mysqli("localhost", "root", "", "umkm_db");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// ambil data form
$nama_pemilik = $_POST['nama_pemilik'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$jenis_kelamin = $_POST['jenis_kelamin'];
$kategori_usaha = implode(", ", $_POST['kategori_usaha']);
$skala_usaha = $_POST['skala_usaha'];
$deskripsi = $_POST['deskripsi'];

// simpan ke database
$sql = "INSERT INTO umkm_kuliner (nama_pemilik, username, password, jenis_kelamin, kategori_usaha, skala_usaha, deskripsi) 
        VALUES ('$nama_pemilik','$username','$password','$jenis_kelamin','$kategori_usaha','$skala_usaha','$deskripsi')";

if ($koneksi->query($sql) === TRUE) {
    header("Location: data.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
