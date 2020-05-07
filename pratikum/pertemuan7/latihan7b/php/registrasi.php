<?php
require 'functions.php';

if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('Registrasi Berhasil');
            document.location.href = 'login.php';
          </script>";
  } else {
    echo "<script>
            alert('Registrasi Gagal');
          </script>";
  }
}
?>

<form action="" method="post">
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

  <button class="btn_style btn_orange" type="submit" name="register">REGISTER</button>
</form>
<html>

<head>
  <title>Membuat Button Berwarna Di HTML</title>
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