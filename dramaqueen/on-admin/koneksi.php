<?php
$koneksi = new mysqli('localhost', 'root','','dbdrakor');

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
} 
?>