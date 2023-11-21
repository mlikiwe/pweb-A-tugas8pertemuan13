<?php

$server = '127.0.0.1';
$port = '3306';
$username = 'root';
$db_name = 'pendaftaran_siswa';
$password = 'mlikiwe123';

$db = mysqli_connect($server, $username, $password, $db_name, $port);

if (!$db) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}