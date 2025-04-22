<?php 

$koneksi = new mysqli("localhost","root","","db_pengguna");
if($koneksi->connect_error) {
    die("koneksigagal :" .$koneksi->connect_error);
}

?>
