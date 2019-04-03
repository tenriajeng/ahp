<?php 
include 'koneksi.php';
$nama = $_POST['namaunit'];
$jumlah_keb = $_POST['jumlah_keb'];

if($nama == ""){
	header("location:index.php?nama=kosong");
}else{
	mysqli_query($connection,"INSERT INTO need VALUES ('','$nama','$jumlah_keb')");

header("location:index.php?pesan=input");
}
?>
