<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$asal = $_POST['asal'];
$namaFile = $_FILES['berkas']['name'];
$namaSementara = $_FILES['berkas']['tmp_name'];
$jurusan = $_POST['jurusan'];
$tujuan = $_POST['tujuan'];
$tgl_msk = $_POST['tgl_msk'];
$tgl_klr = $_POST['tgl_klr'];

if($nama == ""){
	header("location:index.php?nama=kosong");
}
else{
	$data = mysqli_query($connection,"INSERT INTO mhs (nama, asal, nama_file, jurusan, tujuan, tgl_msk, tgl_klr) VALUES ('$nama', '$asal', '$namaFile', '$namaFile', '$tujuan', $tgl_msk, $tgl_klr)");
	
		// $row= mysqli_fetch_array($data);
		// echo $row['nama'];

			

// tentukan lokasi file akan dipindahkan
	$dirUpload = "upload/";

// pindahkan file
	$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

header("location:index.php?pesan=input");
}
?>
