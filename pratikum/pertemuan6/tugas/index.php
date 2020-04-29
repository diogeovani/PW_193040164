<?php
require 'php/functions.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $monitor = query("SELECT * FROM monitor WHERE 
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
  <link rel="stylesheet" href="css/style2.css">
  <title>Monitor</title>
</head>

<body>
  <div class="container">
    <h1>Daftar <br> Handphone </h1>
    <div class="daftar">
      <form action="" method="GET" align="center">
        <input type="text" name="keyword" size="30" placeholder="cari disini...." autocomplete="off" autofocus>
        <button type="submit" name="cari">Cari</button>
      </form>
      <?php if (empty($monitor)) : ?>
        <tr>
          <td colspan="4">
            <p style="color : red; font-style:italic;">Tidak Ditemukan</p>
          </td>
        </tr>
      <?php else : ?>

        <?php foreach ($monitor as $m) : ?>
          <p class="Merek">
            <a href="php/detail.php?id=<?= $m['Id'] ?>" class="merek">
              <?= $m["Merek"] ?>
            </a>
          </p>
        <?php endforeach; ?>
      <?php endif; ?>
      <a href="php/admin.php"><button class="add">Spesifikasi</button></a>
    </div>
  </div>

</body>

</html>