<?php
require 'functions.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $daftarhandphone = query("SELECT * FROM monitor WHERE 
                              Merek LIKE '%$keyword'OR
                              Resolusi LIKE '%$keyword' OR
                              Ukuran layar LIKE '%$keyword%' OR
                                      Harga LIKE '%$keyword%'");
} else {
  $monitor = query("SELECT * FROM monitor");
}

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
    <div class="add" align="right">
      <a href="tambah.php"><button id="tambah">Tambah Data</button></a><br><br>
      <a href="../index.php"><button id="tambah">Kembali</button></a><br><br>
    </div>
    <form action="" method="GET" align="right">
      <input type="text" name="keyword" size="30" placeholder="cari disini...." autocomplete="off" autofocus>
      <button type="submit" name="cari">Cari</button>
    </form>

    <h1 align="center">Layar Monitor</h1>

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
      <?php if (empty($monitor)) : ?>
        <tr>
          <td colspan="4">
            <p style="color : red; font-style:italic;">Tidak Ditemukan</p>
          </td>
        </tr>
      <?php else : ?>

        <?php $i = 1; ?>
        <?php foreach ($monitor as $m) : ?>

          <tr>
            <td id="tab"><?= $i; ?></td>
            <td id="tab">

              <a href="ubah.php?id=<?= $m['Id']; ?>"><button id="b1">Ubah</button></a><br><br>
              <a href="hapus.php?Id=<?= $m['Id']; ?>" onclick="return confirm('Hapus Data???');"> <button id="b2">Hapus</button></a>

            </td>
            <td><img src="../assets/img/<?= $m['gambar']; ?>" alt="" class="img"></td>
            <td id="tab"><?= $m['merek']; ?></td>
            <td id="tab"><?= $m['resolusi']; ?></td>
            <td id="tab"><?= $m['ukuran layar']; ?></td>
            <td id="tab"><?= $m['harga']; ?></td>

          </tr>

          <?php $i++; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </table>

  </div>

</body>

</html>