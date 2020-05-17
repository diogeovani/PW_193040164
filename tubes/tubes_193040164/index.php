<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$musik = query("SELECT * FROM musik");

if (isset($_POST['cari'])) {
  $musik = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Musik</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>

<body bgcolor="grey">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <h4>DAFTAR ALAT MUSIK</h4>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="tambah.php">Tambah Data <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" class="btn btn-primary btn-block" href="logout.php">Logout</a>
        </li>
      </ul>
      <form action="" method="POST">
        <input type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian.." autocomplete="off" autofocus class="keyword">
        <button type="submit" name="cari" class="tombol-cari">Cari</button>
      </form>
    </div>
  </nav>

  <table class="table" border='1' cellpadding='10' cellspacing='0'>
    <thead class="thead-dark">
      <tr>
        <th>#</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Detail</th>
      </tr>

      <?php if (empty($musik)) : ?>
        <tr>
          <td colspan="4">
            <p style="color: red; font-style:italic">Data musik tidak ditemukan!</p>
          </td>
        </tr>
      <?php endif; ?>

      <?php $i = 1;
      foreach ($musik as $m) : ?>
        <tr>
          <td><?= $i++ ?></td>
          <td><img src="img/<?= $m['gambar']; ?>" width="100px"></td>
          <td><?= $m['alat_musik']; ?></td>
          <td>
            <li>Alat musik : <?= $m["alat_musik"]; ?></li>
            <li>Merek : <?= $m["merek"]; ?></li>
            <li>Alamat :<?= $m["alamat"]; ?></li>
            <li>Harga : <?= $m["harga"]; ?></li>
            <a href="detail.php?id=<?= $m['id'] ?>"> lihat detail</a>
          </td>
          </td>
        </tr> <?php endforeach; ?>
  </table>
  </div>

  <script src="js/bootstrap.js"></script>
  <script src="js/jquery.dcjqaccordion.2.7.js"></script>
  <script src="js/scripts.js"></script>
  <script src="js/jquery.slimscroll.js"></script>
  <script src="js/jquery.nicescroll.js"></script>
  <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
  <script src="js/jquery.scrollTo.js"></script>
  <script src="datepicker/js/bootstrap-datepicker.js"></script>
</body>

</html>