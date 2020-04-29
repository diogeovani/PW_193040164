<?php
if (!isset($_GET['id'])) {
  header("location: ../index.php");
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
  <link rel="stylesheet" href="../css/style.css">
  <title>Document</title>
</head>

<body>
  <div class="container">

    <img src="../assets/img/<?= $monitor['Gambar']; ?>" alt="" class="img">
    <div class="keterangan">
      <p><?= $monitor['merk']; ?></p>
      <p><?= $monitor['resolusi']; ?></p>
      <p><?= $monitor['ukuranlayar']; ?></p>
      <p><?= $monitor['harga']; ?></p>
    </div>

    <button class="tombol_kembali"><a href="../index.php">Kembali</a></button>
  </div>

</body>

</html>