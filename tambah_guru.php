<?php
include "koneksi.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$id_guru = $_POST['id_guru'];
	$nama = $_POST['nama'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$no_tlp = $_POST['no_tlp'];
	
	$simpan = mysql_query("INSERT INTO guru VALUES('$id_guru','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$alamat','$no_tlp')");
	if($simpan){
		echo"<script>
		alert('Data Berhasil Disimpan!!~');
		window.location = 'tambah_guru.php';
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
<title>Sistem Informasi DTA AT-TAQWA | Guru</title>
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
TAMBAH DATA GURU
</H3>
</font>
<pre>
<br>
<br><div align = "center">
<form action="" method="post">
<table width="50%" border="0">
	<tr>
		<td>Id Guru</td>
		<td>:</td>
		<td><input type="text" name="id_guru" size="15"></td>
	</tr><tr>
		<td>Nama Guru</td>
		<td>:</td>
		<td><input type="text" name="nama" size="15"></td>
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
		<td>Alamat</td>
		<td>:</td>
		<td><input type="text" name="alamat"  size="30"></td>
	</tr>
	<tr>
		<td>No Tlp</td>
		<td>:</td>
		<td><input type="text" name="no_tlp"  size="15"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="submit" value="Simpan"></td>
	</tr>
</table>
<br><br><a href="profilguru.php">Kembali</a>
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
