<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($connection,"DELETE FROM mhs WHERE id='$id'")or die(mysqli_error());

header("location:index.php?pesan=hapus");
?>