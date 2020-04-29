<?php
require 'functions.php';

$monitor = query("SELECT * FROM monitor");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  <div class="container">
    <div class="add">
      <a href="tambah.php"><button id="tambah">Tambah Data</button></a>
    </div>

    <h1 width="100px" height="100px" align="center">Layar monitor</h1>

    <table border="1" cellpadding="13" cellspacing="0" class="table">
      <tr id="head">
        <th>Id</th>
        <th>Opsi</th>
        <th>Gambar</th>
        <th>Merek</th>
        <th>Resolusi</th>
        <th>Ukuran layar</th>
        <th>Harga</th>

      </tr>

      <?php $i = 1; ?>
      <?php foreach ($monitor as $m) : ?>

        <tr>
          <td id="tab"><?= $i; ?></td>
          <td id="tab">
            <a href=""><button id="b1">Ubah</button></a><br><br>
            <a href=""><button id="b2">Hapus</button></a>

          </td>
          <td><img src="../assets/img/<?= $m['gambar']; ?>" alt="" class="img"></td>
          <td id="tab"><?= $m['merek']; ?></td>
          <td id="tab"><?= $m['resolusi']; ?></td>
          <td id="tab"><?= $m['ukuran layar']; ?></td>
          <td id="tab"><?= $m['harga']; ?></td>


        </tr>

        <?php $i++; ?>
      <?php endforeach; ?>
    </table>

  </div>

</body>

</html>