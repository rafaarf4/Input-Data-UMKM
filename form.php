<?php
// form.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UMKM Pasar Sarwoasri & Parisuko</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #a30313;
      margin: 0;
      padding: 0;
    }
    .container {
      width: 70%;
      margin: 40px auto;
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
      color: #bc0416;
      margin-bottom: 25px;
    }
    label {
      font-weight: bold;
      color: #333;
      display: block;
      margin: 12px 0 6px;
    }
    input[type="text"], input[type="password"], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      outline: none;
      transition: 0.3s;
    }
    input[type="text"]:focus, input[type="password"]:focus, select:focus, textarea:focus {
      border-color: #bc0416;
      box-shadow: 0 0 6px rgba(188,4,22,0.3);
    }
    .radio-group, .checkbox-group {
      display: flex;
      gap: 15px;
      margin-top: 8px;
    }
    input[type="text"], 
    input[type="password"], 
    select, 
    textarea, 
    button {
    width: 100%;              
    box-sizing: border-box;   
    }

    button {
    background: #bc0416;
    color: #fff;
    border: none;
    padding: 12px 20px;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 20px;
    transition: 0.3s;
    }

    button:hover {
    background: #a30313;
    }
    .link {
      display: block;
      text-align: center;
      margin-top: 15px;
    }
    .link a {
      color: #bc0416;
      text-decoration: none;
    }
    .link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Form Pendataan UMKM Pasar Sarwoasri & Parisuko</h2>
    <form action="proses.php" method="POST">
      <label>Nama Pemilik</label>
      <input type="text" name="nama_pemilik" required>

      <label>Username</label>
      <input type="text" name="username" required>

      <label>Password</label>
      <input type="password" name="password" required>

      <label>Jenis Kelamin</label>
      <div class="radio-group">
        <label><input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki</label>
        <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
      </div>

      <label>Kategori Usaha</label>
      <div class="checkbox-group">
        <label><input type="checkbox" name="kategori_usaha[]" value="Makanan"> Makanan</label>
        <label><input type="checkbox" name="kategori_usaha[]" value="Minuman"> Minuman</label>
        <label><input type="checkbox" name="kategori_usaha[]" value="Barang"> Barang</label>
        <label><input type="checkbox" name="kategori_usaha[]" value="Jasa"> Jasa</label>
      </div>

      <label>Skala Usaha</label>
      <select name="skala_usaha" required>
        <option value="">-- Pilih Skala --</option>
        <option value="Mikro">Mikro</option>
        <option value="Kecil">Kecil</option>
        <option value="Menengah">Menengah</option>
      </select>

      <label>Deskripsi Usaha</label>
      <textarea name="deskripsi" rows="4" required></textarea>

      <button type="submit">Simpan Data</button>
    </form>
    <div class="link">
      <a href="data.php">Lihat Data UMKM</a>
    </div>
  </div>
</body>
</html>
