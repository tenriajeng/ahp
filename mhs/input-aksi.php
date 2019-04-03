<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$asal = $_POST['asal'];
$jurusan = $_POST['jurusan'];

if($nama == ""){
	header("location:index.php?nama=kosong");
}else{
	mysqli_query($connection,"INSERT INTO mhs VALUES ('','$nama','$asal','$jurusan')");

header("location:index.php?pesan=input");
}
?>
