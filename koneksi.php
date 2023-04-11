<?php
$servername = "localhost"; // nama server database
$username = "root"; // username database
$password = ""; // password database
$dbname = "login"; // nama database

// membuat koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// memeriksa koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
