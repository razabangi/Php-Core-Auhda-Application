<?php

include("db/connection.php");


if(isset($_POST['update']))
{

$query = $con->prepare("UPDATE tbl_company SET designation=:designation, 
	ext_no=:ext_no,
	direct_no=:direct_no,
	fax_no=:fax_no,
	email=:email
	 WHERE id=:id");

$query->bindParam(':id', $_POST['id']);
$query->bindParam(':designation', $_POST['designation']);
$query->bindParam(':ext_no', $_POST['ext_no']);
$query->bindParam(':direct_no', $_POST['direct_no']);
$query->bindParam(':fax_no', $_POST['fax_no']);
$query->bindParam(':email', $_POST['email']);


$query->execute();
header("location:companiesInfo1.php");
}




?>