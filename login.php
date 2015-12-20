<?php
include("koneksi.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$username = addslashes($_POST["username"]);
	$password = $_POST["password"];
	
	$query = mysql_query("SELECT*FROM login WHERE username = '$username' AND password = '$password'");
	$row = mysql_fetch_array($query);
	$active = $row['username'];
	$count = mysql_num_rows($query);
	
	if($count == 1){
		session_register("username");
		$_SESSION['login_user'] = $username;
		
		header("location: halaman_utama.php");
	}else{
		echo "USERNAME/ PASSWORD salah";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="">
<table width="900" height="665" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="689" bgcolor="#00CCCC"><table width="443" height="361" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2" align="center" valign="middle"><img src="al-qur'an.jpg" width="300" height="300" /></td>
        </tr>
      <tr>
        <td colspan="2"><strong>SISTEM INFORMASI PENDATAAN HAFALAN AL-QUR'AN</strong></td>
        </tr>
      <tr>
        <td width="222" align="right">Username</td>
        <td width="221" align="center">
          
          <input type="text" name="username" id="username" />
		</td>
      </tr>
      <tr>
        <td align="right">Password</td>
        <td align="center">
          
          <input type="password" name="password" id="password" />
       	</td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" name="submit" id="OK" value="Login" />
        </td>
        </tr>
    </table></td>
  </tr>
</table>
</form>
</body>
</html>
