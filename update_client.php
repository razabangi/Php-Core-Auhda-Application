<?php

include("db/connection.php");


if(isset($_POST['update']))
{

$query = $con->prepare("UPDATE tbl_client_info SET client_name=:client_name, 
	contact_no=:contact_no,
	entry_date=:entry_date,
	email=:email,
	education_institute=:education,
	city=:city,
	organization=:organization,
	qualification=:qualification,
	position=:position,
	profession=:profession,
	cv_design_code=:code,
	cv_status=:status
	 WHERE id=:id");

$query->bindParam(':id', $_POST['id']);
$query->bindParam(':client_name', $_POST['client_name']);
$query->bindParam(':contact_no', $_POST['contact_no']);
$query->bindParam(':entry_date', $_POST['entry_date']);
$query->bindParam(':email', $_POST['email']);
$query->bindParam(':education', $_POST['education']);
$query->bindParam(':city', $_POST['city']);
$query->bindParam(':organization', $_POST['organization']);
$query->bindParam(':qualification', $_POST['qualification']);
$query->bindParam(':position', $_POST['position']);
$query->bindParam(':profession', $_POST['profession']);
$query->bindParam(':code', $_POST['code']);
$query->bindParam(':status', $_POST['status']);

$query->execute();
header("location:customer.php");
}

?>