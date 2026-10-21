<?php
// Koneksi database untuk praktikum PAW Modul 2.
// Pastikan database paw_modul2_showroom sudah dibuat/import dari db_modul2.sql.

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'paw_modul2_showroom';

$conn = new mysqli($host, $username, $password, $database);
$conn->set_charset('utf8mb4');
