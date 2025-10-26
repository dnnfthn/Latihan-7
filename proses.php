<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Input Data</title>
</head>
<body>
  <h2>Hasil Input Data</h2>

  <?php
  $nama = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '';
  $alamat = isset($_POST['alamat']) ? htmlspecialchars($_POST['alamat']) : '';
  $tgl_lahir = isset($_POST['tgl_lahir']) ? htmlspecialchars($_POST['tgl_lahir']) : '';
  $jenis_kelamin = isset($_POST['jenis_kelamin']) ? htmlspecialchars($_POST['jenis_kelamin']) : '';

  if (empty($nama) || empty($alamat) || empty($tgl_lahir) || empty($jenis_kelamin)) {
      echo "<p style='color:red;'>Semua field wajib diisi!</p>";
      echo "<a href='form.html'>Kembali ke Form</a>";
  } else {
      echo "<p><strong>Nama:</strong> $nama</p>";
      echo "<p><strong>Alamat:</strong> $alamat</p>";
      echo "<p><strong>Tanggal Lahir:</strong> $tgl_lahir</p>";
      echo "<p><strong>Jenis Kelamin:</strong> $jenis_kelamin</p>";
      echo "<br><a href='form.html'>Kembali ke Form</a>";
  }
  ?>
</body>
</html>
