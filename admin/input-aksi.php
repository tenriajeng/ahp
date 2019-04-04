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

// $tgl_msk = explode('/',$tgl_msk);
// $masuk = "$tgl_msk[2]-$tgl_msk[1]-$tgl_msk[0]";

// $tgl_klr = explode('/',$tgl_klr);
// $keluar = "$tgl_klr[2]-$tgl_klr[1]-$tgl_klr[0]";


if($nama == ""){
	header("location:index.php?nama=kosong");
}
else{
	$data = "INSERT INTO mhs (nama, asal, nama_file, jurusan, tujuan, tgl_msk, tgl_klr) VALUES ('$nama', '$asal', '$namaFile', '$jurusan ', '$tujuan', '$tgl_msk', '$tgl_klr')";
	
		$row= mysqli_query($connection,$data);
		// echo $row['nama'];
		echo $data;
			

// tentukan lokasi file akan dipindahkan
	$dirUpload = "upload/";

// pindahkan file
	$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

header("location:index.php?pesan=input");
}
?>
