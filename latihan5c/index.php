<?php
require 'php/functions.php';

$alat = query("SELECT * FROM musik")

?>

<html>

<head>


    <title>Tugas_193040164</title>


</head>

<body>
    <div class="container">
        <?php foreach ($alat as $al) : ?>
            <p class="tipe">
                <a href="php/detail.php?id=<?= $al['id'] ?>">
                    <?= $al["alat musik"] ?>
                </a>
            </p>
        <?php endforeach; ?>
    </div>
</body>

</html>