<?php
include "koneksi.php";
$id_santri = $_GET['id_santri'];
$a = mysql_fetch_array(mysql_query("SELECT *FROM santri WHERE id_santri= '$id_santri'"));

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$id_santri = $_POST['id_santri'];
	$nama_anak = $_POST['nama_anak'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$anak_ke = $_POST['anak_ke'];
	$jumlah_saudara = $_POST['jumlah_saudara'];
	$alamat = $_POST['alamat'];
	$nama_ayah = $_POST['nama_ayah'];
	$nama_ibu = $_POST['nama_ibu'];
	$alamat_orang_tua = $_POST['alamat_orang_tua'];

	$update = mysql_query("UPDATE santri SET id_santri = '$id_santri, nama_anak = '$nama_anak', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', anak_ke = '$anak_ke', jumlah_saudara = '$jumlah_saudara', alamat = '$alamat', nama_ayah = '$nama_ayah', nama_ibu = '$nama_ibu', alamat_orang_tua = '$alamat_orang_tua' WHERE id_santri = '$id_santri'");

	if($update){
		echo "<script>
		alert('Data Berhasil di Ubah');
		window.location = 'profilsantri.php';
		</script>";
	}else{
		echo "<script>
		alert('Data GAGAL di UBAH');
		</script>";
	}
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Sistem Informasi DTA AT-TAQWA | Pendaftaran</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<header><center> <h4>SISTEM INFORMASI DTA AT-TAQWA</h4>
</header>
	<div id="menu">
		<?php
			include "menu.php";
		?>
	</div>

	<div id="page-wrap"><center>
<font face= verdana size =2 color ="#000000">
<h3 align= center>
<br>
UBAH DATA SANTRI
</H3>
</font>
<pre> <div align = "center">
<form action="" method="post">
<table width="50%" border="0">
	
	
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="submit" value="Simpan"></td>
	</tr>
</table>
</form>
</div>
</pre>
</div>
<div id="wrapper">
	<div id="content">
		<div id="main"></div>
	</div>
	<div style="clear: both;">&nbsp;</div>
</div>
</body>
</html>