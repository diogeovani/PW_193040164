<?php

function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
  mysqli_select_db($conn, "tubes_193040164") or die("Database salah!");

  return $conn;
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, "$query");

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();
  $gambar = htmlspecialchars($data['Gambar']);
  $merek = htmlspecialchars($data['Merek']);
  $resolusi = htmlspecialchars($data['Resolusi']);
  $ukuranlayar = htmlspecialchars($data['Ukuran layar']);
  $harga = htmlspecialchars($data['Harga']);


  $query = "INSERT INTO 
                  monitor
                  VALUES
                  (null, '$gambar','$merek','$resolusi','$ukuranlayar','$harga')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM monitor WHERE id = $id");

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();
  $id = htmlspecialchars($data['Id']);
  $gambar = htmlspecialchars($data['Gambar']);
  $merek = htmlspecialchars($data['Merek']);
  $resolusi = htmlspecialchars($data['Resolusi']);
  $ukuranlayar = htmlspecialchars($data['Ukuran layar']);
  $harga = htmlspecialchars($data['Harga']);

  $query = "UPDATE monitor
    SET 
    Gambar = '$gambar'
    Merek = '$merek',
    Resolusi = '$resolusi',
    Harga = '$harga',
    WHERE Id = $id ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
function registrasi($data)
{
  $conn = koneksi();
  $username = strtolower(stripcslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);

  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
                alert('username sudah digunakan');
              </script>";
    return false;
  }

  $password = password_hash($password, PASSWORD_DEFAULT);

  $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
  mysqli_query($conn, $query_tambah);

  return mysqli_affected_rows($conn);
}