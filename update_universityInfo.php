<?php

include("db/connection.php");


if(isset($_POST['update']))
{

$query = $con->prepare("UPDATE tbl_universityinfo SET university_name=:uni_name, 
	email=:email,
	type=:type,
	establish=:establish_year,
	speciality=:speciality,
	address=:address,
	url=:url,
	contact=:contact_person
	 WHERE id=:id");

$query->bindParam(':id', $_POST['id']);
$query->bindParam(':uni_name', $_POST['uni_name']);
$query->bindParam(':email', $_POST['email']);
$query->bindParam(':type', $_POST['type']);
$query->bindParam(':establish_year', $_POST['establish_year']);
$query->bindParam(':speciality', $_POST['speciality']);
$query->bindParam(':address', $_POST['address']);
$query->bindParam(':url', $_POST['url']);
$query->bindParam(':contact_person', $_POST['contact_person']);

$query->execute();
header("location:universityInfo1.php");
}




?>