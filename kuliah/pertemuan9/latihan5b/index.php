<?php
//menghubungkan dengan file php lainnya
require 'php/functions.php';
//melakukan query
$alat = query("SELECT * FROM musik");

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
                <th>Alat musik</th>
                <th>Merek</th>
                <th>Alamat</th>
                <th>Harga</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ($alat as $al) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><img src="assets/img/<?= $al["gambar"]; ?>"></td>
                    <td><?= $al["alat musik"]; ?></td>
                    <td><?= $al["merek"]; ?></td>
                    <td><?= $al["alamat"]; ?></td>
                    <td><?= $al["harga"]; ?></td>
                </tr>
                <?php $i++  ?>
            <?php endforeach; ?>
        </table>
    </div>

</body>

</html>