<?php 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$asal = $_POST['asal'];
$namaFile = $_FILES['berkas']['name'];
$namaSementara = $_FILES['berkas']['tmp_name'];
$jurusan = $_POST['jurusan'];
$tujuan = $_POST['tujuan'];
$tgl_msk = $_POST['tgl_msk'];
$tgl_klr = $_POST['tgl_klr'];

mysqli_query($connection,"UPDATE mhs SET nama='$nama', asal='$asal', nama_file='$namaFile', jurusan='$jurusan', tujuan='$tujuan', tgl_msk='$tgl_msk', tgl_klr='$tgl_klr' WHERE id='$id'");

// tentukan lokasi file akan dipindahkan
$dirUpload = "upload/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
		
header("location:index.php?pesan=update");
?>