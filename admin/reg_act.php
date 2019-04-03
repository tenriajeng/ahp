<?php 
include 'koneksi.php';
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($connection,"INSERT INTO admin VALUES ('','$fullname','$username','$password')");

header("location:db.php?pesan=input");
?>