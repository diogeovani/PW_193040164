<?php

$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");


mysqli_select_db($conn, "tubes_193040164") or die("Database salah!");


$monitor = mysqli_query($conn, "SELECT * FROM monitor");
?>


<html>

<head>
    <title>Tugas_193040164</title>
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="container" align="center">
        <h3 align="center">Alat Musik</h3>
        <table cellpadding="50" cellspacing="0" border="1">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Merek</th>
                <th>resolusi</th>
                <th>Ukuran layar</th>
                <th>Harga</th>
            </tr>
            <?php $i = 1 ?>
            <?php while ($m = mysqli_fetch_assoc($monitor)) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><img src="assets/img/<?= $al["gambar"]; ?>"></td>
                    <td><?= $m["merek"]; ?></td>
                    <td><?= $m["resolusi"]; ?></td>
                    <td><?= $m["ukuran layar"]; ?></td>
                    <td><?= $m["harga"]; ?></td>
                </tr>
                <?php $i++  ?>
            <?php endwhile; ?>
        </table>
    </div>

</body>

</html>