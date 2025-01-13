<?php
// Cek apakah form login telah di-submit
if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa apakah username dan password valid
    // Anda dapat mengganti logika validasi sesuai kebutuhan
    if($username === 'admin' && $password === 'admin123') {
        // Jika valid, arahkan ke halaman utama
        header('Location: home.php');
        exit();
    } else {
        // Jika tidak valid, tampilkan pesan error
        echo "Username atau password salah!";
    }
}
?>