<?php
session_start();
require 'functions.php';

if (isset($_SESSION['username'])) {
  header('Location: admin.php');
  exit;
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if ($password == $row['password']) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = $row['id'];
    }
    if ($row['id'] == $_SESSION['hash']) {
      header("Location: admin.php");
      die;
    }
    header("Location: ../index.php");
    die;
  }
  $error = true;
}
?>

<form action="" method="post">
  <?php if (isset($error)) : ?>
    <p style="color: red; font-style: italic;">Username atau Password salah</p>
  <?php endif; ?>
  <table>
    <tr>
      <td><label for="username">Username</label></td>
      <td>:</td>
      <td><input type="text" name="username"></td>
    </tr>
    <tr>
      <td><label for="password">Password</label></td>
      <td>:</td>
      <td><input type="password" name="password"></td>
    </tr>
  </table>
  <div class="remember">
    <input type="checkbox" name="remember">
    <label for="remember">Remember me</label>
  </div>
  <button class="btn_style btn_orange" type="submit" name="submit">Login</button>
  <div class="registrasi">
    <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
  </div>
</form>
<html>

<head>
  <title></title>
  <link rel="stylesheet" href="../css/style.css">
  <style>
    .btn_style {
      border: 1px solid #cecece;
      border-radius: 3px;
      padding: 3px 10px;
      box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
      color: white;
    }

    .btn_orange {
      background-color: #ffa500;
    }
  </style>
</head>

<body>


</body>

</html>