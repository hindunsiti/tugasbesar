<html>
<head>
<title>Sistem Informasi DTA AT-TAQWA | Profil Santri</title>
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
<h2>DAFTAR SANTRI DTA AT-TAQWA</h2><br><p><center>
<table width="1028" height="358" border="1" align="center">
	<tr>
	<td><center>ID Santri</td>
	<td><center>Nama</td>
	<td><center>Tempat Lahir</td>
	<td><center>Tanggal Lahir</td>
	<td><center>Jenis Kelamin</td>
	<td><center>Anak Ke-</td>
	<td><center>Jumlah Saudara</td>
	<td><center>Alamat</td>
	<td><center>Nama Ayah</td>
	<td><center>Nama Ibu</td>
	<td><center>Alamat Orang Tua</td>
	
	
	<?php
	include "koneksi.php";
	$query = mysql_query("SELECT * FROM santri");
	while($d = mysql_fetch_array($query)){
	?>
	
		
			<tr>
				<td><center><?=$d['id_santri']?></td>
				<td><center><?=$d['nama_anak']?></td>
				<td><center><?=$d['tempat_lahir']?></td>
				<td><center><?=$d['tanggal_lahir']?></td>
				<td><center><?=$d['jenis_kelamin']?></td>
				<td><center><?=$d['anak_ke']?></td>
				<td><center><?=$d['jumlah_saudara']?></td>
				<td><center><?=$d['alamat']?></td>
				<td><center><?=$d['nama_ayah']?></td>
				<td><center><?=$d['nama_ibu']?></td>
				<td><center><?=$d['alamat_orang_tua']?></td>
				
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
		<td><input type="text" name="anak_ke"  size="15" value="fjhfjfjh"></td>
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

	<?php
	
}else if(@$_GET['page'] == 'hapus'){
	$id = @$_GET['no'];
	echo "ini adalah hapus";
}

?>
<br><br><a href="tambah_santri.php">Tambah Data Santri</a>
<div style ="padding-top:10px;">
	<a href="laporan/cetak.php"target="_blank"><button>Cetak</button></a>
</div>

</div>
</body>
</html>
