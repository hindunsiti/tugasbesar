<?php
include "pendaftaran.php";

	//1
	$Nama_Anak = $_POST['nama_anak'];
	$Tempat_Lahir = $_POST['kota_lahir'];
	$Tanggal_Lahir = $_POST['tanggal_lahir'];
	$Jenis_Kelamin = $_POST['JK'];
	$Anak_Ke = $_POST['Anakke'];
	$Jumlah_Saudara = $_POST['Jumlah_saudara'];
	$Alamat= $_POST['Alamat'];
	$Nama_Ayah = $_POST['nama_Ayah'];
	$Nama_Ibu = $_POST['nama_Ibu'];
	$Alamat_Orang_Tua = $_POST['Alamat_Orang_Tua'];

	//echo "<pre>".print_r($_POST,true)."</pre>";

	//2
	$simpan	= mysql_query("INSERT INTO komentar (Nama_Anak, kota_lahir, Tanggal_Lahir, jk, anakke, jumlah_saudara, alamat, nama_ayah, nama_ibu, alamat_orang_tua) VALUES ('$Nama_Anak', '$kota_lahir, Tanggal_Lahir', '$jk', '$anakke', '$jumlah_saudara', '$alamat', '$nama_ayah', '$nama_ibu', '$alamat_orang_tua')");

	//3
	if ($simpan){
		echo "Data berhasil disimpan";
		echo "<pre>".print_r($_POST,true)."</pre>";
		
	}else{
		echo "Data Tidak Tersimpan";
	}
?>