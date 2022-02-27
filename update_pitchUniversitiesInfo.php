<?php

include("db/connection.php");


if(isset($_POST['update']))
{

$query = $con->prepare("UPDATE tbl_pitched_universities SET university_name=:uni_name, 
	authorized_person=:authorised_person,
	referred_person=:referred_person,
	designation=:designation,
	email=:email_id,
	status=:status
	 WHERE id=:id");

$query->bindParam(':id', $_POST['id']);
$query->bindParam(':uni_name', $_POST['uni_name']);
$query->bindParam(':authorised_person', $_POST['authorised_person']);
$query->bindParam(':referred_person', $_POST['referred_person']);
$query->bindParam(':designation', $_POST['designation']);
$query->bindParam(':email_id', $_POST['email_id']);
$query->bindParam(':status', $_POST['status']);


$query->execute();
header("location:pitchedUniversitiesInfo1.php");
}

?>