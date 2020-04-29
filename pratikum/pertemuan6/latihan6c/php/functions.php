<?php
function koneksi()
{
    $conn =  mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040164") or die("Database salah!");

    return $conn;
}
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data)
{
    $conn = koneksi();
    $gambar = htmlspecialchars($data['gambar']);
    $merek = htmlspecialchars($data['merek']);
    $resolusi = htmlspecialchars($data['resolusi']);
    $ukuranlayar = htmlspecialchars($data['ukuran layar']);
    $harga = htmlspecialchars($data['harga']);


    $query = "INSERT INTO 
                daftar_handphone
                VALUES
                (null, '$gambar','$merek','$resolusi','$ukuranlayar','$harga');
                ";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM monitor WHERE Id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
