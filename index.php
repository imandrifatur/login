<?php
session_start();
require_once 'koneksi.php';
// cek apakah pengguna telah masuk atau tidak
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
  // pengguna belum masuk, arahkan ke halaman login
  header("Location: login.php");
  exit();
}

// cek peran atau hak akses pengguna
if ($_SESSION['role'] == 'admin') {
  // pengguna adalah admin, arahkan ke halaman admin
  header("Location: admin/admindashboard.php");
  exit();
} else {
  // pengguna adalah user, arahkan ke halaman user
  header("Location: user/userdashboard.php");
  exit();
}
?>
