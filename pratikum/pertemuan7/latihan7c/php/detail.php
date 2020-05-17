<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
if (!isset($_GET['id'])) {
  header("localtion: ../index.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];

$monitor = query("SELECT * FROM monitor WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan7a</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div id="page-wrap">
    <div class="container">
      <div class="gambar">
        <img src="../assets/img/<?= $monitor["Gambar"]; ?>" alt="">
      </div>
      <div class="keterangan">
        <p>Merek: <?= $monitor['merek']; ?></p>
        <p>Resolusi :<?= $monitor['resolusi']; ?></p>
        <p>Ukuran layar :<?= $monitor['ukuranlayar']; ?></p>
        <p>Harga :<?= $monitor['harga']; ?></p>
      </div>

      <button class="tombol-kembali"><a href="../index.php" id="tombol">Kembali</a></button>
    </div>
  </div>
</body>

</html>