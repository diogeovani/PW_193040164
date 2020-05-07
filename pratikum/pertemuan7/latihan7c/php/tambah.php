<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'admin.php';
            </script>";
  } else {
    echo "<script> 
              alert('data gagal ditambahkan!');
              document.location.href = 'admin.php';
              </script> ";
  }
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
    <h1 align="center">Form Data Monitor</h1>
    <form method="POST">
      <ul align="center">
        <p>
          <label for="gambar">Gambar :</label><br>
          <input type="text" name="gambar" id="gambar" autofocus required>
        </p>
        <p>
          <label for="merek">Merek :</label><br>
          <input type="text" name="merek" id="merek" autofocus required><br>
        </p>
        <p>
          <label for="resolusi">Resolusi :</label><br>
          <input type="text" name="type" id="resolusi" autofocus required><br>
        </p>
        <p>

          <label for="ukuran layar">Ukuran layar :</label><br>
          <input type="textarea" name="ukuran layar" id="ukuran layar" autofocus required>
        </p>
        <p>
          <label for="harga">Harga :</label><br>
          <input type="text" name="harga" id="harga" autofocus required>
        </p>

        <br>
        <button type="submit" name="tambah" id="s">Tambah Data</button>
        <button type="submit" id="k">
          <a href="admin.php">Kembali</a>
        </button>
      </ul>

    </form>
  </div>

</body>

</html>