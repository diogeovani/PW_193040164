<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

$id = $_GET['id'];

$m = query("SELECT * FROM musik WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Musik</title>

</head>

<body align="center">
  <h3>Detail Musik</h3>
  <ul>
    <li><img src="img/<?= $m['gambar']; ?>" width="200px"></li>
    <li>Alat musik : <?= $m["alat_musik"]; ?></li>
    <li>Merek : <?= $m["merek"]; ?></li>
    <li>Alamat :<?= $m["alamat"]; ?></li>
    <li>Harga : <?= $m["harga"]; ?></li>
    <li><a href="ubah.php?id=<?= $m['id']; ?>">Ubah</a> | <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm('apakah anda yakin?');">Hapus</a></li>
    <li><a href="index.php">Kembali ke daftar musik</a></li>
  </ul>
</body>

</html>