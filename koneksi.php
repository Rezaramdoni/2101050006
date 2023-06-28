<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'siska2';

$connect = mysqli_connect ($server, $username, $password, $database);

if ($connect == true) {
    echo 'koneksi berhasil';
}else {
    echo 'koneksi Gagal' . mysqli_connect_error();
}

?>