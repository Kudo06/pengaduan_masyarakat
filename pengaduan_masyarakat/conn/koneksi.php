<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "pengaduan_masyarakat";
$koneksi = mysqli_connect($server, $user, $password, $nama_database);

if (!$koneksi) {
  die("Maaf Database Gagal Terhubung :" . mysqli_connect_error());
}
