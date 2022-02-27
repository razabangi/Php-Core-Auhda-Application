<?php

include("db/connection.php");


if(isset($_POST['update']))
{

$query = $con->prepare("UPDATE tbl_social_media SET first_name=:first_name, 
	last_name=:last_name,
	institute=:insitute,
	designation=:designation,
	email=:email_id
	 WHERE id=:id");

$query->bindParam(':id', $_POST['id']);
$query->bindParam(':first_name', $_POST['first_name']);
$query->bindParam(':last_name', $_POST['last_name']);
$query->bindParam(':insitute', $_POST['insitute']);
$query->bindParam(':designation', $_POST['designation']);
$query->bindParam(':email_id', $_POST['email_id']);


$query->execute();
header("location:socialMediaInfo1.php");
}

?>