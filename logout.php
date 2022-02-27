<?php
session_start();

if($_SESSION['user_name'] != "")
{
	session_destroy();
	header("location:admin_login.php");
}
?>