<?php
require("koneksi.php");

echo "=== TEST KONEKSI DATABASE ===\n";
echo "Testing connection to database 'argapkl'...\n\n";

$hub = open_connection();

if ($hub) {
    echo "✓ Koneksi SUKSES\n";
    
    // Test query sederhana
    $test_query = "SELECT 1 as test";
    $result = mysqli_query($hub, $test_query);
    
    if ($result) {
        echo "✓ Query test berhasil\n";
        
        // Cek database yang tersedia
        $db_query = "SHOW DATABASES";
        $db_result = mysqli_query($hub, $db_query);
        
        echo "\nDatabase yang tersedia:\n";
        while ($row = mysqli_fetch_array($db_result)) {
            echo "- " . $row[0] . "\n";
        }
        
        // Cek tabel dalam database argapkl
        $table_query = "SHOW TABLES";
        $table_result = mysqli_query($hub, $table_query);
        
        echo "\nTabel dalam database 'argapkl':\n";
        if (mysqli_num_rows($table_result) > 0) {
            while ($row = mysqli_fetch_array($table_result)) {
                echo "- " . $row[0] . "\n";
            }
        } else {
            echo "Tidak ada tabel ditemukan!\n";
        }
        
    } else {
        echo "✗ Query test gagal: " . mysqli_error($hub) . "\n";
    }
    
    mysqli_close($hub);
} else {
    echo "✗ Koneksi GAGAL\n";
    echo "Error: " . mysqli_connect_error() . "\n";
}
?>
