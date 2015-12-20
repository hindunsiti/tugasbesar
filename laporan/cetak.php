<?php

include "fpdf.php";
include "../koneksi.php";

$pdf = new FPDF();
$pdf-> AddPage();

$pdf-> SetFont('arial','B',16);
$pdf-> Cell (0.5,'DTA AT-TAQWA','0','1','C',false);
$pdf-> SetFont ('Arial','i',8);
$pdf-> Cell(0.5,'alamat : Jln Desa Cipadung','0','1','C',false);
$pdf-> Ln(3);
$pdf-> Cell (190,0.6,'0','1','C',true);
$pdf-> Ln(5);

$pdf-> SetFont('arial','B',9);
$pdf-> Cell  (50,5,'Laporan DATA SANTRI','0','1','L',false); 
$pdf-> Ln(3);

$pdf-> SetFont('arial','b',9);
$pdf-> Cell(8,6,'no.',1,0,'c');
$pdf-> Cell(10,6,'ID',1,0,'c');
$pdf-> Cell(30,6,'Nama Santri',1,0,'c');
$pdf-> Cell(22,6,'Tempat Lahir',1,0,'c');
$pdf-> Cell(22,6,'Tanggal Lahir',1,0,'c');
$pdf-> Cell(8,6,'JK',1,0,'c');
$pdf-> Cell(30,6,'Alamat',1,0,'c');
$pdf-> Cell(25,6,'Nama Ayah',1,0,'c');
$pdf-> Cell(25,6,'Nama Ibu',1,0,'c');
$pdf-> Ln(2);
$no = 0;
$sql = mysql_query("select *from santri order by  id_santri asc");
while ($data =mysql_fetch_array($sql)){

	$no++;
	$pdf-> Ln(4);
	$pdf-> SetFont ('arial','',7);
	$pdf-> Cell (8,4,$no.".",1,0,'c');
	$pdf-> Cell (10,4,$data['id_santri'],1,0,'L');
	$pdf-> Cell (30,4,$data['nama_anak'],1,0,'L');
	$pdf-> Cell (22,4,$data['tempat_lahir'],1,0,'L');
	$pdf-> Cell (22,4,$data['tanggal_lahir'],1,0,'L');
	$pdf-> Cell (8,4,$data['jenis_kelamin'],1,0,'L');
	$pdf-> Cell (30,4,$data['alamat'],1,0,'L');
	$pdf-> Cell (25,4,$data['nama_ayah'],1,0,'L');
	$pdf-> Cell (25,4,$data['nama_ibu'],1,0,'L');
	
}
$pdf-> Output();
?>

	
	



