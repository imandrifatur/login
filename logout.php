<?php
session_start();
require_once 'koneksi.php';
// hapus semua variabel session
$_SESSION = array();

// hapus cookie session jika ada
if (ini_get("session.use_cookies")) {
  $params = session_get_cookie_params();
  setcookie(session_name(), '', time() - 42000,
    $params["path"], $params["domain"],
    $params["secure"], $params["httponly"]
  );
}

// hapus sesi
session_destroy();

// arahkan pengguna ke halaman login
header("Location: login.php");
exit();
?>
