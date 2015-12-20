<?php
include "koneksi.php";

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
	
	$simpan = mysql_query("INSERT INTO santri VALUES('$id_santri','$nama_anak','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$anak_ke','$jumlah_saudara','$alamat','$nama_ayah','$nama_ibu','$alamat_orang_tua')");
	if($simpan){
		echo"<script>
		alert('Data Berhasil Disimpan!!~');
		window.location = 'tambah_santri.php';
		</script>";
	}else{
		echo"<script>
		alert('Data GAGAL Disimpan!!~');
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
TAMBAH DATA SANTRI
</H3>
</font>
<pre>
<br>
<br><div align = "center">
<form action="" method="post">
<table width="50%" border="0">
	<tr>
		<td>Id Santri</td>
		<td>:</td>
		<td><input type="text" name="id_santri" size="15"></td>
	</tr><tr>
		<td>Nama Anak</td>
		<td>:</td>
		<td><input type="text" name="nama_anak" size="15"></td>
	</tr>
	<tr>
		<td>Tempat Lahir</td>
		<td>:</td>
		<td><input type="text" name="tempat_lahir" size="15"></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><input type="text" name="tanggal_lahir" size="15"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><select name="jenis_kelamin">
				<option value="">--Pilih--</option>
				<option value="L">Laki-laki</option>
				<option value="P">Perempuan</option>
			</select></td>
	</tr>
	<tr>
		<td>Anak ke</td>
		<td>:</td>
		<td><input type="text" name="anak_ke"  size="15"></td>
	</tr>
	<tr>
		<td>Jumlah Saudara</td>
		<td>:</td>
		<td><input type="text" name="jumlah_saudara"  size="15"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><input type="text" name="alamat"  size="30"></td>
	</tr>
	<tr>
		<td>Nama Ayah</td>
		<td>:</td>
		<td><input type="text" name="nama_ayah"  size="15"></td>
	</tr>
	<tr>
		<td>Nama Ibu</td>
		<td>:</td>
		<td><input type="text" name="nama_ibu"  size="15"></td>
	</tr>
	<tr>
		<td>Alamat Orang Tua</td>
		<td>:</td>
		<td><input type="text" name="alamat_orang_tua"  size="30"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="submit" value="Simpan"></td>
	</tr>
</table>
<br><br><a href="profilsantri.php">Kembali</a>
</form>
</div>
</pre>
</div>


<div id="wrapper">
	<div id="content">
		
		<div id="main">
			
		</div>
	</div>
	<div style="clear: both;">&nbsp;</div>
</div>
</body>
</html>
