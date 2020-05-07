<?php

require 'php/functions.php';

$monitor = query("SELECT * FROM monitor");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan7b</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div id="page-wrap">
    <div class="content">
      <h1 class="judul">Daftar Nama Monitor</h1>
      <?php foreach ($monitor as $m) : ?>
        <div class="daftar">
          <p class="merek">
            <a href="php/detail.php?id=<?= $m['Id']; ?>">
              <?= $m["merek"]; ?>
            </a>
          </p>
        </div>
      <?php endforeach; ?>
    </div>

    <a href="php/login.php">
      <button>Masuk Ke Halaman Admin</button>
    </a>

  </div>
</body>

</html>