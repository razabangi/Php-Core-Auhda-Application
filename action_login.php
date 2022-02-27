<?php
session_start();
include('db/connection.php');

	if(isset($_POST['submit']))
	{
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = $con->prepare("select * from tbl_registration where email = :email AND password = :password");
	$query->bindParam(':email',$email);
	$query->bindParam(':password',$password);
	$query->setFetchMode(PDO::FETCH_ASSOC);
	$query->execute();
	$count = $query->rowCount();
	$data = $query->fetch();

	if($count == 1 && !empty($data)) 
	{
		$_SESSION['user_name'] = $data['email'];
		$_SESSION['name'] = $data['user_name'];
		header("location:Home.php");
	}
	else
	{
		header("location:admin_login.php");


	}

	}
?>