<?php
session_start();
session_destroy();
header("Location: ../index.php");
setcookie('username', '', time() - 3600);
setcookie('hash', '', time() - 3600);
header("Location: ../index.php");
die;
