<?php 
    if (!isset($_GET['id'])){
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

    $id = $_GET['id'];

    $al = query("SELECT * FROM musik WHERE id = $id")[0];
?>

<html>
    <head>
    
        <title>Tugas_193040164</title>



        <link rel="stylesheet" href="style.css">

    </head>

<body>
<div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $al["gambar"]; ?>" alt="">
         </div>
            <div class="keterangan">
                <p><?= $al["alat musik"]; ?></p>
                <p><?= $al["merek"]; ?></p>
                <p><?= $al["alamat"]; ?></p>
                <p><?= $al["harga"]; ?></p>
            </div>

            <button class="tombol_kembali"> <a href="../index.php">kembali</a> </button>
    </div>
</body>
</html>
