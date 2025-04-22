<?php 
session_start();
include "koneksi.php";
$username =$_POST['username'];
$password =$_POST['password'];
$query = $koneksi->prepare("SELECT * FROM pengguna WHERE username=? AND password=?");
$query->bind_param("ss",$username,$password);
$query->execute();
$result = $query->get_result();
if($result->num_rows === 1) {
    $_SESSION['user'] = $username;
    header ("Location:home.php");
} else {
    echo "<script>alert('Login gagal!');window.location='index.php';</script>";

}

?>