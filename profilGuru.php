<html>
<head>
<title>Sistem Informasi DTA AT-TAQWA | Profil Guru</title>
<link href="default.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="default.css">
</head>

<body>
<header><center> <h4>SISTEM INFORMASI DTA AT-TAQWA</h4>
</header>
<br>
	<center><div id="menu">
		<?php
			include "menu.php";
		?>
	</div>
<div id="page-wrap"><center>
<h2>DAFTAR GURU YANG MENGAJAR DI DTA AT-TAQWA</h2><br><p><center>
<table width="1028" height="358" border="1" align="center">
	<tr>
	<td><center>ID Guru</td>
	<td><center>Nama</td>
	<td><center>Tempat Lahir</td>
	<td><center>Tanggal Lahir</td>
	<td><center>Jenis Kelamin</td>
	<td><center>Alamat</td>
	<td><center>No Tlp</td>
	
	<?php
	include "koneksi.php";
	$query = mysql_query("SELECT * FROM guru");
	while($d = mysql_fetch_array($query)){
	?>
	
		
			<tr>
				<td><center><?=$d['id_guru']?></td>
				<td><center><?=$d['nama']?></td>
				<td><center><?=$d['tempat_lahir']?></td>
				<td><center><?=$d['tanggal_lahir']?></td>
				<td><center><?=$d['jenis_kelamin']?></td>
				<td><center><?=$d['alamat']?></td>
				<td><center><?=$d['no_tlp']?></td>
			</tr>
	
		
	<?php
	}
	
	?>
	</tr>
</table>
<?php

if(@$_GET['page'] == 'edit'){
	$id = @$_GET['no'];
	?>
		<br><div align = "center">
<form action="" method="post">
<table width="50%" border="0">

<tr>
		<td>ID Guru</td>
		<td>:</td>
		<td><input type="text" name="id_guru" size="15"></td>
	</tr>
	<tr>
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

	<?php
	
}else if(@$_GET['page'] == 'hapus'){
	$id = @$_GET['no'];
	echo "ini adalah hapus";
}

?>
<?php
			if(isset($_SESSION['login_user'])){
			?>
			<li><a href="tambah_guru" title="">Tambah Data Guru</a></li>
			<?php
			}
			?>
<br><br><a href="tambah_guru.php">Tambah Data Guru</a>
<div style ="padding-top:10px;">
	<a href="laporan/cetak2.php"target="_blank"><button>Cetak</button></a>
</div>

</div>
</body>
</html>
