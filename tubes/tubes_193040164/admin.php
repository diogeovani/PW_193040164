<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}
// menghubungkan dengan file php lainnya
require 'function.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $musik = query("SELECT * FROM musik WHERE
               gambar LIKE '%$keyword%' OR
            alat_musik LIKE '%$keyword%' OR
            merek LIKE '%$keyword%' OR
            alamat LIKE '%$keyword%' OR
            harga LIKE '%$keyword%'");
} else {
  $musik = query("SELECT * FROM musik");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style>
    body {
      background-color: #00FFFF;
    }
  </style>
</head>

<body>
  <a href="logout.php" class="btn waves-effect waves-light mb-3">
    Logout
  </a> <br> <br>
  <div class="add">
    <a href="tambah.php" class="btn waves-effect waves-light mb-3">Tambah Data</a>
  </div>
  <form action="" method="get">
    <input type="text" name="keyword" size="15px" placeholder="Masukkan keyword pencarian ..." autocomplete="off" autofocus>
    <button type="submit" name="cari" class="btn waves-effect waves-light mt-3">Cari!</button>
  </form>
  <table border="1" cellpadding="10" cellspacing="0" class="responsive-table striped">
    <tr>
      <th>ID</th>
      <th>Alat musik</th>
      <th>Merek</th>
      <th>Alamat</th>
      <th>HARGA</th>
    </tr>
    <?php if (empty($musik)) : ?>
      <tr>
        <td colspan="7">
          <h1>Data Tidak Ditemukan</h1>
        </td>
      </tr>
    <?php endif; ?>
    <?php $i = 1;
    foreach ($musik as $m) :
    ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="ubah.php?id=<?= $m['id'] ?>" class="btn waves-effect waves-light">Ubah</a>
          <a href="hapus.php?id=<?= $m['id'] ?>" onclick="return confirm('Hapus Data??')" class="btn waves-effect waves-light">Hapus</a>
        </td>
        <td><img width="100px" src="../assets/img/<?= $m["cover"]; ?>"></td>
        <td><?= $m["alat_musik"] ?></td>
        <td><?= $m["merek"] ?></td>
        <td><?= $m["alamat"] ?></td>
        <td><?= $m["harga"] ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>

</html>