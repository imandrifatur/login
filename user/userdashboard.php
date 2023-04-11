<?php
session_start();

// cek apakah pengguna telah masuk atau tidak
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
  header("Location: ../login.php");
  exit();
}

// Anda dapat menambahkan kode Anda di sini setelah validasi pengguna
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>user</h1>
<a href="../logout.php">logout</a>
</body>
</html>