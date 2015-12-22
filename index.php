<?php
include("koneksi.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$username = addslashes($_POST["username"]);
	$password = $_POST["password"];
	
	$query = mysql_query("SELECT*FROM admin WHERE id_admin = '$username' AND password = '$password'");
	$row = mysql_fetch_array($query);
	$active = $row['id_admin'];
	$count = mysql_num_rows($query);
	
	if($count == 1){
		session_register("id_admin");
		$_SESSION['login_user'] = $username;
		
		header("location: index.php");
	}else{
		echo "USERNAME / PASSWORD salah";
	}
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Sistem Informasi DTA AT-TAQWA</title>
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
<div id="wrapper">
<br>
	<div id="content">
		<div id="sidebar">
			<div id="login" class="boxed">
				<h2 class="title">Login Admin</h2>
				<div class="content">
				<?php
				if(!isset($_SESSION['login_user'])){
				?>
					<form id="form1" method="post" action="">
						<fieldset>
						<legend>Sign-In</legend>
						<label for="inputtext1">ID Admin:</label>
						<input type="text" name="username"/>
						<label for="inputtext2">Password:</label>
						<input type="password" name="password"/>
						<input id="inputsubmit1" type="submit" name="inputsubmit1" value="Sign In" />
						</fieldset>
					</form>
				<?php
				}else{
					?>
					Welcome Admin!~<br/>
					<button type="button" onclick="window.location='logout.php'">Logout</button>
					<?php
				}
				?>
				</div>
			</div>
		</div>
		<div id="main">
				<h1 class="title">Selamat Datang </h1>
<br>
<p> Selamat datang di website resmi DTA AT-TAQWA 				
		</div>
	</div>
	
	<div style="clear: both;">&nbsp;</div>
</div>
</div>

</body>
</html>
