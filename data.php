<?php
$koneksi = new mysqli("localhost", "root", "", "umkm_db");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
$result = $koneksi->query("SELECT * FROM umkm_kuliner ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title> Data UMKM Pasar Sarwoasri & Parisuko</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #a30313;
      margin: 0;
      padding: 30px;
    }
    .box {
      background: #fff;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
      width: 95%;
      margin: auto;
      overflow-x: auto;
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #bc0416;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 15px;
    }
    th, td {
      padding: 12px;
      border: 1px solid #ddd;
      text-align: left;
    }
    th {
      background: #bc0416;
      color: #fff;
    }
    tr:nth-child(even) {
      background: #f9f9f9;
    }
    .btn {
      padding: 6px 12px;
      border-radius: 6px;
      text-decoration: none;
      font-size: 13px;
      margin: 2px;
    }
    .btn-add {
      background: #bc0416;
      color: #fff;
      display: inline-block;
      margin-bottom: 15px;
    }
    .btn-add:hover {
      background: #a30313;
    }
  </style>
</head>
<body>
  <div class="box">
    <h2>Data UMKM Pasar Sarwoasri & Parisuko</h2>
    <a href="form.php" class="btn btn-add">+ Tambah Data</a>
    <table>
      <tr>
        <th>ID</th>
        <th>Nama Pemilik</th>
        <th>Username</th>
        <th>Jenis Kelamin</th>
        <th>Kategori Usaha</th>
        <th>Skala Usaha</th>
        <th>Deskripsi</th>
        <th>Tanggal Input</th>
      </tr>
      <?php while($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['nama_pemilik'] ?></td>
        <td><?= $row['username'] ?></td>
        <td><?= $row['jenis_kelamin'] ?></td>
        <td><?= $row['kategori_usaha'] ?></td>
        <td><?= $row['skala_usaha'] ?></td>
        <td><?= $row['deskripsi'] ?></td>
        <td><?= $row['created_at'] ?></td>
      </tr>
      <?php endwhile; ?>
    </table>
  </div>
</body>
</html>
