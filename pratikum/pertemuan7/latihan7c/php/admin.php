<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $alat_musik = query("SELECT * FROM monitor WHERE
                 merek LIKE '%$keyword%' OR
                 resolusi LIKE '%$keyword%' OR
                 ukuranlayar LIKE '%$keyword%' OR
                 harga LIKE '%$keyword%'");
} else {
  $monitor = query("SELECT * FROM monitor");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan7a</title>
  <link rel="stylesheet" href="../css/style.css">
  <style>
    th {
      background-color: yellow;
      font-weight: bold;
      text-align: center;
    }

    td {
      text-align: center;
    }

    button {
      width: 100%;
      margin: 5px 0 5px 0;
    }
  </style>
</head>

<body>
  <div align="center" class="container">
    <h1>Layar Monitor</h1>
    <div class="add">
      <a href="tambah.php">Tambah Data</a>
    </div>

    <form action="" method="GET">
      <input type="text" name="keyword" size="30" autocomplete="off" autofocus>
      <button type="submit" name="cari" style="width: auto">Cari</button>
    </form>

    <table border="1" cellpadding="13" cellspacing="0">
      <tr id="head">
        <th>Id</th>
        <th>Opsi</th>
        <th>Gambar</th>
        <th>Merek</th>
        <th>Resolusi</th>
        <th>Ukuran layar</th>
        <th>Harga</th>

      </tr>

      <?php if (empty($monitor)) : ?>
        <tr>
          <td colspan="7">
            <p style="color: red; font-style:italic">data tidak ditemukan!</p>
          </td>
        </tr>
      <?php endif; ?>

      <?php $no = 1; ?>
      <?php foreach ($monitor as $m) : ?>
        <tr>
          <td><?= $no; ?></td>
          <td>
            <a href="ubah.php?id=<?= $m['id']; ?>"><button>Ubah</button></a>
            <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
          </td>
          <td><img src="../assets/img/<?= $m['gambar']; ?>" alt="" class="img"></td>
          <td id="tab"><?= $m['merek']; ?></td>
          <td id="tab"><?= $m['resolusi']; ?></td>
          <td id="tab"><?= $m['ukuran layar']; ?></td>
          <td id="tab"><?= $m['harga']; ?></td>

        </tr>
        <?php $no++; ?>
      <?php endforeach; ?>
    </table>

    <div class="logout">
      <a href="logout.php">Logout</a>
    </div>
  </div>
</body>

</html>