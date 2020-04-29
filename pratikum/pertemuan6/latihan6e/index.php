<?php
require 'php/functions.php';
$monitor = query("SELECT * FROM monitor")
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

  <h1>Daftar Monitor</h1>
  <div class="container">
    <div class="daftar">

      <?php foreach ($monitor as $m) : ?>
        <p class="merek">
          <a href="php/detail.php?id=<?= $m['Id'] ?> ">
            <?= $m["merek"] ?>
          </a>
        </p>
      <?php endforeach; ?>
    </div>
  </div>
</body>

</html>