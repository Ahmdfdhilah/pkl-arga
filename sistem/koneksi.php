<?php
function open_connection() {
    $hostname = "localhost";
    $username = "root";
    $password = ""; // Sesuaikan dengan password database MySQL Anda
    $dbname = "argapkl"; // Sesuaikan nama database Anda

    $koneksi = mysqli_connect($hostname, $username, $password, $dbname);

    // Cek koneksi
    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    return $koneksi;
}
?>
