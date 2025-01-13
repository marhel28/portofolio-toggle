<?php
session_start();

// Periksa apakah pengguna telah login
if(!isset($_SESSION['username'])) {
    // Jika tidak, arahkan kembali ke halaman login
    header('Location: index.php');
    exit();
}

// Tampilkan halaman utama setelah login
echo "Selamat datang, " . $_SESSION['username'] . "! Ini adalah halaman utama setelah login.";
?>
