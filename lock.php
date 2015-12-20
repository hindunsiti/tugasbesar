<?php
include("koneksi.php");
session_start();
$user_check = $_SESSION['login_user'];

$ses_sql = mysql_query("SELECT*FROM admin WHERE id_admin = '$user_check'");

$row = mysql_fetch_array($ses_sql);
$login_session = $row['username'];

?>