<?php
function open_connection() {
    $hostname = "localhost";
    $username = "webuser";
    $password = "password123"; // Sesuaikan dengan password database MySQL Anda
    $dbname = "argapkl"; // Sesuaikan nama database Anda

    // Set mysqli to report errors
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    
    try {
        $koneksi = mysqli_connect($hostname, $username, $password, $dbname);
        
        // Set charset untuk menghindari masalah encoding
        mysqli_set_charset($koneksi, "utf8");
        
        return $koneksi;
        
    } catch (mysqli_sql_exception $e) {
        error_log("Database connection failed: " . $e->getMessage());
        echo "Koneksi database gagal: " . $e->getMessage();
        return false;
    }
}

// Fungsi untuk test koneksi sederhana
function test_connection() {
    $koneksi = open_connection();
    
    if ($koneksi) {
        $result = mysqli_query($koneksi, "SELECT 1");
        if ($result) {
            mysqli_close($koneksi);
            return true;
        }
    }
    
    return false;
}
?>
