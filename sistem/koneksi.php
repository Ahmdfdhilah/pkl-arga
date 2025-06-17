<?php
function open_connection() {
    $hostname = "b7ugrctah5ilqvtdwgwg-mysql.services.clever-cloud.com";
    $username = "un4hveqvjpr3ypef";
    $password = "mDmLTE1aGac8xpVwwnMH"; // Sesuaikan dengan password database MySQL Anda
    $dbname = "b7ugrctah5ilqvtdwgwg"; // Sesuaikan nama database Anda

    $koneksi = mysqli_connect($hostname, $username, $password, $dbname);

    // Cek koneksi
    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    return $koneksi;
}
?>
